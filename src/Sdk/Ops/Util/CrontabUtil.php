<?php

namespace App\Module\Ops\Util;

use EasySwoole\Component\Singleton;

class CrontabUtil
{
    /**
     * 获取进程信息
     * @param string $jobName
     * @return array|null
     */
    public static function get(string $jobName): ?array
    {
        $table = \EasySwoole\EasySwoole\Crontab\Crontab::getInstance()->schedulerTable();
        $nList = [];

        foreach ($table as $name => $job) {
            $nList[$name] = $job;
        }

        return $nList[$jobName] ?? null;
    }
}