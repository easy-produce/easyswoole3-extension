<?php

namespace Es3\Queue\Driver;

use EasySwoole\Queue\Job;
use EasySwoole\Queue\QueueDriverInterface;
use produce\Queue\Config\RabbitConfig;

class RabbitQueue implements QueueDriverInterface
{
    protected $pool;
    protected string $queueName;

    public function __construct(RabbitConfig $rabbitConfig, string $queueName = 'easy_queue')
    {
//        $this->pool = $pool;
//        $this->queueName = $queueName;
    }

    public function push(Job $job): bool
    {
//        $data = serialize($job);
//        return $this->pool->invoke(function (Connection $connection) use ($data) {
//            return $connection->lPush($this->queueName, $data);
//        });
        return true;
    }

    public function pop(float $timeout = 3.0): ?Job
    {
        return null;
    }

    public function size(): ?int
    {
        return 1;
    }
}
