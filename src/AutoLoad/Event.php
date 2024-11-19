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
            $path = EASYSWOOLE_ROOT . '/' . EsConst::ES_DIRECTORY_APP_NAME . '/' . EsConst::ES_DIRECTORY_MODULE_NAME . '/';
            $modules = EsUtility::sancDir($path);

            foreach ($modules as $module) {

                $eventPath = $path . $module . '/' . EsConst::ES_DIRECTORY_EVENT_NAME . '/';
                $eventFiles = EsUtility::sancDir($eventPath);

                foreach ($eventFiles as $key => $eventFile) {

                    $autoLooadFile = $eventPath . $eventFile;
                    if (!file_exists($autoLooadFile)) {
                        continue;
                    }

                    $className = basename($autoLooadFile, '.php');
                    $eventName = basename($autoLooadFile, EsConst::ES_DIRECTORY_EVENT_NAME . ".php");

                    $class = "\\" . EsConst::ES_DIRECTORY_APP_NAME . "\\" . EsConst::ES_DIRECTORY_MODULE_NAME . "\\" . $module . "\\" . EsConst::ES_DIRECTORY_EVENT_NAME . "\\" . $className;
                    if (class_exists($class)) {
                        $module = ucwords($module);

                        /** 获取所有方法 */
                        $ref = new \ReflectionClass($class);
                        $methods = $ref->getMethods();
                        foreach ($methods as $key => $method) {

                            $function = $method->getName();
                            $name = strtolower($module) . '.' . strtolower($eventName) . '.' . $function;

                            if (in_array($function, ['getInstance'])) {
                                continue;
                            }

                            /** 是否存在 */
                            if (!$ref->hasMethod($function)) {
                                continue;
                            }

                            /** 是否可见 */
                            if (!$ref->getMethod($function)->isPublic()) {
                                continue;
                            }

                            /** 是否静态 */
                            if (!$ref->getMethod($function)->isStatic()) {
                                continue;
                            }

//                            $class::getInstance()->set(strtolower($name), function () {
//                                var_dump('11');
//                            });
                            var_dump($name, '$name');
                            $class::getInstance()->set(strtolower($name), function () {
                                $class::$function();
                            });
                            echo Utility::displayItem('Event', strtolower($name));
                            echo "\n";
                        }
                    }
                }


            }
        } catch (\Throwable $throwable) {
            echo 'Event Initialize Fail :' . $throwable->getMessage() . $throwable->getFile() . $throwable->getLine();
        }
    }
}
