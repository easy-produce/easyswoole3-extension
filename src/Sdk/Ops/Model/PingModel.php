<?php

namespace App\Module\Ops\Model;

use App\Module\Ops\Util\Arrayutil;
use App\Module\Ops\Util\CacheUtil;
use App\Module\Ops\Util\CrontabUtil;
use EasySwoole\Component\Process\AbstractProcess;
use EasySwoole\Component\Singleton;
use EasySwoole\Component\TableManager;
use EasySwoole\Crontab\JobInterface;
use EasySwoole\FastCache\Cache;
use EasySwoole\Spl\SplBean;
use Es3\Constant\EsConst;
use Es3\Utility\ArrayUtility;
use EasySwoole\Component\Process\Manager;
use Swoole\Table;

/**
 * 心跳存储
 */
class PingModel extends SplBean
{
    use Singleton;

    protected string $cacheProcessKey = 'ops_process';
    protected string $cacheCrontabKey = 'ops_crontab';

    /**
     * 写入进定时任务心跳
     * @param \EasySwoole\Crontab\JobInterface $crontab
     * @return void
     */
    public function crontab(JobInterface $crontab)
    {
        /** 写入缓存 */
        $key = $this->cacheCrontabKey . "_ping";

        $jobName = $crontab->jobName();
        $job = CrontabUtil::get($jobName);

        $data = ['name' => $jobName, 'ping_time' => nowDate()];

        if ($job['taskNextRunTime'] ?? null) {
            $data['next_run_time'] = date('Y-m-d H:i:s', $job['taskNextRunTime']);
        }

        if ($job['taskRunTimes'] ?? null) {
            $data['run_times'] = $job['taskRunTimes'];
        }

        if ($job['taskCurrentRunTime'] ?? null) {
            $data['current_run_time'] = date('Y-m-d H:i:s', $job['taskCurrentRunTime']);
        }

        Cache::getInstance()->hset($key, $crontab->jobName(), $data);
    }

    public function process(AbstractProcess $process)
    {
        /** 写入缓存 */
        $key = $this->cacheProcessKey . "_ping";

        /** 获取进程信息 */
        $pid = $process->getPid();
        $processInfo = Manager::getInstance()->info($pid)[$pid] ?? null;

        /** 获取不到不处理 */
        if (superEmpty($processInfo)) {
            return;
        }

        $data = [
            'pid' => $pid,
            'memory_usage' => $processInfo['memoryUsage'] ?? null,
            'memory_peak_usage' => $processInfo['memoryPeakUsage'] ?? null,
            'ping_time' => nowDate(),
        ];

        Cache::getInstance()->hset($key, $pid, $data);
    }

    public function crontabException(JobInterface $crontab, \Throwable $throwable)
    {
        $jobName = $crontab->jobName();
        $job = CrontabUtil::get($jobName);

        /** 获取不到不处理 */
        if (superEmpty($job)) {
            return;
        }

        $exception = jsonEncode([
            'code' => $throwable->getCode(),
            'msg' => $throwable->getMessage(),
            'file' => $throwable->getFile(),
            'line' => $throwable->getLine(),
            'trace' => $throwable->getTraceAsString(),
        ]);

        $data = [
            'name' => $jobName,
            'exception' => $exception,
        ];

        /** 写入缓存 */
        $key = $this->cacheCrontabKey . "_exception";
        Cache::getInstance()->hset($key, $jobName, $data);
    }

    public function crontabGetALl(string $type): array
    {
        if (superEmpty($type)) {
            return [];
        }

        $type = strtolower($type);
        $key = "{$this->cacheCrontabKey}_$type";
        $list = CacheUtil::hGetALl($key);
        return array_values($list);
    }

    public function processGetALl(string $type): array
    {
        if (superEmpty($type)) {
            return [];
        }

        $type = strtolower($type);
        $key = "{$this->cacheProcessKey}_$type";
        $list = CacheUtil::hGetALl($key);
        return array_values($list);
    }


    public function processException(AbstractProcess $process, \Throwable $throwable)
    {
        $pid = $process->getPid();
        $processInfo = Manager::getInstance()->info($pid)[$pid] ?? null;

        /** 获取不到不处理 */
        if (superEmpty($processInfo)) {
            return;
        }

        $exception = jsonEncode([
            'time' => nowDate(),
            'code' => $throwable->getCode(),
            'msg' => $throwable->getMessage(),
            'file' => $throwable->getFile(),
            'line' => $throwable->getLine(),
            'trace' => $throwable->getTraceAsString(),
            'memory_usage' => $processInfo['memoryUsage'] ?? '',
            'memory_peak_usage' => $processInfo['memoryPeakUsage'] ?? '',
        ]);

        $data = ['pid' => $pid, 'exception' => $exception];

        /** 写入缓存 */
        $key = $this->cacheProcessKey . "_exception";
        Cache::getInstance()->hset($key, $pid, $data);
    }

    public function processShutdown(AbstractProcess $process)
    {
        $pid = $process->getPid();
        $processInfo = Manager::getInstance()->info($pid)[$pid] ?? null;

        $data = [
            'pid' => $pid,
            'shutdown' => [
                'time' => nowDate(),
                'memory_usage' => $processInfo['memoryUsage'],
                'memory_peak_usage' => $processInfo['memoryPeakUsage'],
            ]
        ];

        $key = $this->cacheProcessKey . "_shutdown";
        Cache::getInstance()->hset($key, $pid, $data);
    }
}