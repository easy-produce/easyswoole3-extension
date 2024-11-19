<?php

namespace Es3;

use App\Constant\AppConst;
use App\Constant\EnvConst;
use App\Module\Callback\Queue\TaskErrorQueue;
use App\Module\Callback\Queue\TaskFailQueue;
use App\Module\Callback\Queue\TaskInvalidQueue;
use App\Pool\RabbitPool;
use App\Rpc\Oms;
use EasySwoole\AtomicLimit\AtomicLimit;
use EasySwoole\Component\Context\ContextManager;
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
use EasySwoole\Template\Render;
use Es3\Constant\EsConst;
use Es3\Handle\ErrorHandel;
use Es3\Handle\ShutdownHandel;
use Es3\Handle\TriggerHandel;
use Es3\Policy;
use Es3\Exception\ErrorException;
use Es3\Handle\HttpThrowable;
use Es3\Output\Result;
use Es3\Template\Smarty;
use Es3\ThrowableHandle\Handle;

class EasySwooleEvent
{
    public static function initialize(): void
    {
        try {
            /** 设置时区 */
            date_default_timezone_set('Asia/Shanghai');

            /** 设置精度 */
            ini_set('serialize_precision', 14);


            /** 错误级别 */
            \EasySwoole\Component\Di::getInstance()->set(\EasySwoole\EasySwoole\SysConst::ERROR_REPORT_LEVEL, E_ALL);

            /** 目录不存在就创建 */
            is_dir(strtolower(EnvConst::PATH_LOG)) ? null : mkdir(strtolower(EnvConst::PATH_LOG), 0777, true);
            is_dir(strtolower(EnvConst::PATH_TEMP)) ? null : mkdir(strtolower(EnvConst::PATH_TEMP), 0777, true);
            is_dir(strtolower(EnvConst::PATH_LOCK)) ? null : mkdir(strtolower(EnvConst::PATH_LOCK), 0777, true);

            /** 日志初始化 */
            $logger = new \Es3\Handle\LoggerHandel(\App\Constant\EnvConst::PATH_LOG);
            \EasySwoole\Component\Di::getInstance()->set(SysConst::LOGGER_HANDLER, $logger);

            \EasySwoole\Component\Di::getInstance()->set(SysConst::TRIGGER_HANDLER, new \EasySwoole\Trigger\Trigger($logger));

            /** 加载配置文件 */
            \Es3\AutoLoad\Config::getInstance()->autoLoad();

            /** ORM  */
            $mysqlConf = config('mysql', true);

            if (!superEmpty($mysqlConf)) {

                echo Utility::displayItem('MysqlConf', jsonEncode($mysqlConf));
                echo "\n";

                $config = new \EasySwoole\ORM\Db\Config($mysqlConf);
                DbManager::getInstance()->addConnection(new Connection($config));

                DbManager::getInstance()->onQuery(function ($res, $builder, $start) {

                    if (isHttp()) {
                        $mysqlQuery = ContextManager::getInstance()->get(EsConst::ES_LOG_MYSQL_QUERY);
                        $mysqlQuery->lastQuery[] = $builder->getLastQuery();
                    }

                    $nowDate = date('Y-m-d H:i:s', time());
                    if (!isProduction()) {
                        fwrite(STDOUT, "\n====================  {$nowDate} ====================\n\n");
                        fwrite(STDOUT, $builder->getLastQuery() . "\n");
                        fwrite(STDOUT, "\n====================  {$nowDate} ====================\n");
                    }
                });
            }

            /** 路由初始化 */
            \Es3\AutoLoad\Router::getInstance()->autoLoad();

            /** 事件加载 */
            \Es3\AutoLoad\Event::getInstance()->autoLoad();;

            /** 配置控制器命名空间 */
            Di::getInstance()->set(SysConst::HTTP_CONTROLLER_NAMESPACE, 'App\\Controller\\');

            /** 注入http异常处理 */
            \EasySwoole\Component\Di::getInstance()->set(SysConst::HTTP_EXCEPTION_HANDLER, [HttpThrowable::class, 'run']);

            /** 注入shutdown异常处理 */
            \EasySwoole\Component\Di::getInstance()->set(\EasySwoole\EasySwoole\SysConst::SHUTDOWN_FUNCTION, [ShutdownHandel::class, 'run']);

            /** 初始化服务临时名称 */
            \EasySwoole\Component\Di::getInstance()->set(EsConst::ES_SERVER_TEMP_NAME, md5(uniqid(microtime(true), true)));

            /** 初始化服务器启动时间 */
            \EasySwoole\Component\Di::getInstance()->set(EsConst::ES_SERVER_RUN_TIME, nowDate('Y-m-d H:i:s'));

            // onRequest
            \EasySwoole\Component\Di::getInstance()->set(\EasySwoole\EasySwoole\SysConst::HTTP_GLOBAL_ON_REQUEST,
                function (\EasySwoole\Http\Request $request, \EasySwoole\Http\Response $response) {

                    ContextManager::getInstance()->set(AppConst::DI_RESULT, new Result());

                    ContextManager::getInstance()->set(AppConst::DI_REQUEST, $request);

                    ContextManager::getInstance()->set(AppConst::DI_RESPONSE, $response);

                    ContextManager::getInstance()->set(EsConst::ES_LOG_MYSQL_QUERY, new \stdClass());

                    /** 请求唯一标识  */
                    Trace::createRequestId();

                    /** 中间件 */
                    Middleware::onRequest($request, $response);
                });

            // afterRequest
            \EasySwoole\Component\Di::getInstance()->set(\EasySwoole\EasySwoole\SysConst::HTTP_GLOBAL_AFTER_REQUEST,
                function (\EasySwoole\Http\Request $request, \EasySwoole\Http\Response $response) {
                    /** 中间件 */
                    Middleware::afterRequest($request, $response);
                });

        } catch (\Throwable $throwable) {
            echo "系统发生错误-message:" . $throwable->getMessage() . "\n";
            echo "系统发生错误-file:" . $throwable->getFile() . "\n";
            echo "系统发生错误-line:" . $throwable->getLine() . "\n";
        }
    }

    /**
     * @throws \EasySwoole\Component\Process\Exception
     * @throws \EasySwoole\RedisPool\Exception\Exception
     * @throws \Es3\Exception\ErrorException
     * @throws \EasySwoole\RedisPool\RedisPoolException
     */
    public static function mainServerCreate(EventRegister $register): void
    {

        try {
            /** 策略加载 */
            Policy::getInstance()->initialize(AppConst::POLICY_CONF_IS_AUTH);

            $policyConfIsSign = (new \ReflectionClass(AppConst::class))->getConstant('POLICY_CONF_IS_SIGN');
            if ($policyConfIsSign) {
                Policy::getInstance()->initialize(AppConst::POLICY_CONF_IS_SIGN);
            }

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
            }

            /** fast cache */
            $config = new \EasySwoole\FastCache\Config();
            $config->setTempDir(config('TEMP_DIR'));
            $server = ServerManager::getInstance()->getSwooleServer();
            Cache::getInstance($config)->attachToServer($server);

            /** todo html模板 因为得输出html模板 */
            Render::getInstance()->getConfig()->setRender(new Smarty());
            Render::getInstance()->getConfig()->setTempDir(EASYSWOOLE_TEMP_DIR);
            Render::getInstance()->attachServer(ServerManager::getInstance()->getSwooleServer());

            /** 初始化定时任务 */
            \Es3\AutoLoad\Crontab::getInstance()->autoLoad();
            /** 初始化自定义进程 */
            \Es3\AutoLoad\Process::getInstance()->autoLoad();

            /** rabbitMQ 注册 */
            $rabbitConf = config('rabbit', true) ?? null;
            if (!superEmpty($rabbitConf)) {
                // 连接池注册
                $config = new \EasySwoole\Pool\Config();
                $rabbitConfig = new \Es3\Queue\Config\RabbitConfig($rabbitConf);
                \EasySwoole\Pool\Manager::getInstance()->register(new \Es3\Pool\RabbitPool($config, $rabbitConfig), EsConst::ES_RABBIT);
            }

        } catch (\Throwable $throwable) {
            echo "系统发生错误-message:" . $throwable->getMessage() . "\n";
            echo "系统发生错误-file:" . $throwable->getFile() . "\n";
            echo "系统发生错误-line:" . $throwable->getLine() . "\n";
        }
    }
}
