<?php
//
//namespace App\Module\Ops\Process;
//
//use App\Module\Ops\Constant\OpsConstant;
//use App\Module\Ops\Event\BuildEvent;
//use App\Module\Ops\Service\BuildService;
//use App\Module\Ops\Service\GatewayService;
//use App\Module\Ops\Service\ProcessService;
//use App\Module\Ops\Util\PingUtil;
//use App\Module\Setting\Service\EasyswooleProcessService;
//use EasySwoole\Component\Process\AbstractProcess;
//use EasySwoole\FastCache\Cache;
//use Es3\Base\BaseProcess;
//use Es3\Exception\ErrorException;
//use Es3\Trace;
//use Swoole\Process;
//
///**
// * 初始化进程
// */
//class InitializeProcess extends BaseProcess
//{
//    /**
//     * 运行环境 (默认master)
//     * @var string
//     */
//    const RUN_ENV = 'ALL';
//
//    /**
//     * @param $arg
//     * @return void
//     * @throws \Es3\Exception\ErrorException
//     */
//    protected function run($arg)
//    {
//        $a = 1;
//        while (true) {
//
//            PingUtil::process($this);
//
//            if ($a >= 10) {
//                throw  new ErrorException(111, '222');
//            }
//
//            sleep(5);
//            $a++;
//
//            // 测试把定时任务加进来
////            sleep(1);
////            BuildEvent::getInstance()->get('ops.crontab.run');
////            var_dump('222');
//        }
//    }
//}
