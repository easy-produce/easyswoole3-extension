<?php

namespace Es3\AutoLoad;

use App\Constant\AppConst;
use Es3\Constant\EsConst;
use App\Module\Employee\Crontab\UserCrontab;
use AsaEs\RemoteCall\Rpc;
use EasySwoole\Component\Singleton;
use EasySwoole\EasySwoole\Command\Utility;
use EasySwoole\EasySwoole\Logger;
use Es3\EsUtility;
use function foo\func;

class Event
{
    use Singleton;

    public function autoLoad()
    {
        try {
            $crontabLoads = [];
            $path = EASYSWOOLE_ROOT . '/' . EsConst::ES_DIRECTORY_APP_NAME . '/' . EsConst::ES_DIRECTORY_MODULE_NAME . '/';
            $modules = EsUtility::sancDir($path);

            foreach ($modules as $module) {

                \Es3\Event::getInstance()->set($module, function ($module, $function, ...$args) use ($path) {

                    $module = ucwords($module);
                    $eventPath = $path . $module . '/' . EsConst::ES_FILE_NAME_EVENT;
                    if (!file_exists($eventPath)) {
                        Logger::getInstance()->notice("没有找到" . $eventPath . "事件文件");
                        return;
                    }
                    $namespace = "\\" . EsConst::ES_DIRECTORY_APP_NAME . "\\" . EsConst::ES_DIRECTORY_MODULE_NAME . "\\" . $module . "\\" . EsConst::ES_DIRECTORY_EVENT_NAME;
                    if (!class_exists($namespace)) {
                        Logger::getInstance()->notice("没有找到" . $namespace . "事件命名空间");
                        return;
                    }

                    $ref = new \ReflectionClass($namespace);
                    if (!($ref->hasMethod($function) && $ref->getMethod($function)->isPublic() && !$ref->getMethod($function)->isStatic())) {
                        Logger::getInstance()->notice("没有找到" . $namespace . "的run方法");
                        return;
                    }

                    $namespace = new $namespace();
                    $namespace->$function(...$args);
                });

                echo Utility::displayItem('Event', strtolower($module));
                echo "\n";
            }
        } catch (\Throwable $throwable) {
            echo 'Event Initialize Fail :' . $throwable->getMessage();
        }
    }
}
