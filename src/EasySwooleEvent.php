<?php

namespace Es3;


use App\Constant\AppConst;
use App\Constant\EnvConst;
use App\LogPusher;
use App\Module\Callback\Queue\TaskErrorQueue;
use App\Module\Callback\Queue\TaskFailQueue;
use App\Module\Callback\Queue\TaskInvalidQueue;
use App\Rpc\Oms;
use EasySwoole\AtomicLimit\AtomicLimit;
use EasySwoole\Component\Di;
use EasySwoole\Console\Console;
use EasySwoole\EasySwoole\Command\Utility;
use EasySwoole\EasySwoole\Config;
use EasySwoole\EasySwoole\Logger;
use EasySwoole\EasySwoole\ServerManager;
use EasySwoole\EasySwoole\Swoole\EventRegister;
use EasySwoole\EasySwoole\SysConst;
use EasySwoole\FastCache\Cache;
use EasySwoole\Http\Request;
use EasySwoole\Http\Response;
use EasySwoole\Log\LoggerInterface;
use EasySwoole\ORM\Db\Connection;
use EasySwoole\ORM\DbManager;
use EasySwoole\Pool\Exception\Exception;
use EasySwoole\Rpc\NodeManager\RedisManager;
use EasySwoole\Rpc\Rpc;
use EasySwoole\Template\Render;
use Es3\AutoLoad\Queue;
use Es3\Constant\RpcConst;
use Es3\Policy;
use Es3\Exception\ErrorException;
use Es3\Handle\HttpThrowable;
use Es3\Output\Result;
use Es3\Template\Smarty;
use Es3\ThrowableHandle\Handle;
use Es3Doc\Es3Doc;

class EasySwooleEvent
{
    public static function initialize(): void
    {
        date_default_timezone_set('Asia/Shanghai');

        // 设置精度
        ini_set('serialize_precision', 14);

        /** 加载配置文件 */
        \Es3\AutoLoad\Config::getInstance()->autoLoad();

        /** 路由初始化 */
        \Es3\AutoLoad\Router::getInstance()->autoLoad();

        /** 配置控制器命名空间 */
        Di::getInstance()->set(SysConst::HTTP_CONTROLLER_NAMESPACE, 'App\\Controller\\');

        /** 注入http异常处理 */
        Di::getInstance()->set(SysConst::HTTP_EXCEPTION_HANDLER, [HttpThrowable::class, 'run']);

        /** 事件注册 */
        \Es3\AutoLoad\Event::getInstance()->autoLoad();

        /** 替换composer.json 确保每次测试环境自动更新 */
        if (!isProduction()) {
//            $composerJson = './composer.json';
//            file_put_contents($composerJson, ' ', FILE_APPEND);
        }

        /** 目录不存在就创建 */
        is_dir(strtolower(EnvConst::PATH_LOG)) ? null : mkdir(strtolower(EnvConst::PATH_LOG), 0777, true);
        is_dir(strtolower(EnvConst::PATH_TEMP)) ? null : mkdir(strtolower(EnvConst::PATH_TEMP), 0777, true);
        is_dir(strtolower(EnvConst::PATH_LOCK)) ? null : mkdir(strtolower(EnvConst::PATH_LOCK), 0777, true);

//        /** 拷贝钩子 */
//        if (isDev()) {
//            $gitPreCommit = EASYSWOOLE_ROOT . '/.git/hooks/pre-commit';
//            copy(EASYSWOOLE_ROOT . '/vendor/easy-produce/easyswoole3-extension/src/Hocks/pre-commit', $gitPreCommit);
//            chmod($gitPreCommit, 0755);
//        }

        /** ORM  */
        $mysqlConf = config('mysql', true);
        if (!superEmpty($mysqlConf)) {

            echo Utility::displayItem('MysqlConf', jsonEncode($mysqlConf));
            echo "\n";

            $config = new \EasySwoole\ORM\Db\Config($mysqlConf);
            DbManager::getInstance()->addConnection(new Connection($config));

            DbManager::getInstance()->onQuery(function ($res, $builder, $start) {

                $nowDate = date('Y-m-d H:i:s', time());
                if (!isProduction()) {
                    /** 打印日志 */
                    echo "\n====================  {$nowDate} ====================\n";
                    echo $builder->getLastQuery() . "\n";
                    echo "==================== {$nowDate} ====================\n";
                }
                Logger::getInstance()->log($builder->getLastQuery(), LoggerInterface::LOG_LEVEL_INFO, 'query');
            });
        }
    }

    public static function frameInitialize(): void
    {
    }

    public static function mainServerCreate(EventRegister $register): void
    {
        /** 初始化定时任务 */
        \Es3\AutoLoad\Crontab::getInstance()->autoLoad();

        /** 初始化自定义进程 */
        \Es3\AutoLoad\Process::getInstance()->autoLoad();

        /** 策略加载 */
        Di::getInstance()->set(AppConst::POLICY_CONF_IS_AUTH, Policy::getInstance()->initialize(AppConst::POLICY_CONF_IS_AUTH));
        Di::getInstance()->set(AppConst::POLICY_CONF_IS_SIGN, Policy::getInstance()->initialize(AppConst::POLICY_CONF_IS_SIGN));
        
        /** smarty */
        Render::getInstance()->getConfig()->setRender(new Smarty());
        Render::getInstance()->getConfig()->setTempDir(EASYSWOOLE_TEMP_DIR);
        Render::getInstance()->attachServer(ServerManager::getInstance()->getSwooleServer());

        /** 热加载 */
        if (isDev()) {
            $hotReloadOptions = new \EasySwoole\HotReload\HotReloadOptions;
            $hotReload = new \EasySwoole\HotReload\HotReload($hotReloadOptions);
            $hotReloadOptions->setMonitorFolder([EASYSWOOLE_ROOT . '/App']);

            $server = ServerManager::getInstance()->getSwooleServer();
            $hotReload->attachToServer($server);
        }

        /** 连接redis */
        $redisConf = config('redis', true);
        if (superEmpty(!$redisConf)) {
            try {
                echo Utility::displayItem('RedisConf', jsonEncode($redisConf));
                echo "\n";

                $redisConf = new \EasySwoole\Redis\Config\RedisConfig($redisConf);
                \EasySwoole\RedisPool\Redis::getInstance()->register(EnvConst::REDIS_KEY, $redisConf);
            } catch (Exception $e) {
                throw new ErrorException(1002, 'redis连接失败');
            }

            /** 初始化消息队列 */
            Queue::getInstance()->autoLoad();
        }

        /** rpc */
        $redisConf = config('redis', true);
        if (!superEmpty($redisConf)) {

            /** 给rpc专门开设redis */
            $redisConf['db'] = RpcConst::RPC_REDIS_DB;
            $redisConf = new \EasySwoole\Redis\Config\RedisConfig($redisConf);
            \EasySwoole\RedisPool\Redis::getInstance()->register(RpcConst::RPC_REDIS_KEY, $redisConf);

            /** 服务端自动注册 */
            $redisPool = \EasySwoole\RedisPool\Redis::getInstance()->get(RpcConst::RPC_REDIS_KEY);
            $config = new \EasySwoole\Rpc\Config();
            $config->setServerIp(EnvConst::RPC_SERVER_HOST);
            $config->setListenPort(EnvConst::RPC_PORT);
            $config->setNodeManager(new RedisManager($redisPool));
            \Es3\AutoLoad\Rpc::getInstance()->autoLoad($config);
        }

        /** fast cache */
        $config = new \EasySwoole\FastCache\Config();
        $config->setTempDir(config('TEMP_DIR'));
        $server = ServerManager::getInstance()->getSwooleServer();
        Cache::getInstance($config)->attachToServer($server);

        /** 限流器 */
        \Es3\AutoLoad\AtomicLimit::getInstance()->autoLoad();
    }

    public static function onRequest(Request $request, Response $response)
    {
        Di::getInstance()->set(AppConst::DI_RESULT, Result::class);
        Di::getInstance()->set(AppConst::DI_REQUEST, $request);
        Di::getInstance()->set(AppConst::DI_RESPONSE, $response);

        /** 请求唯一标识  */
        Trace::createRequestId();

        /** 中间件 */
        Middleware::onRequest($request, $response);
    }

    public static function afterRequest(Request $request, Response $response): void
    {
        /** 中间件 */
        Middleware::afterRequest($request, $response);
    }
}
