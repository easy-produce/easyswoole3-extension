<?php


namespace Es3\Tracker;


use EasySwoole\Component\Singleton;
use EasySwoole\Tracker\Excetion\Exception;
use Swoole\Coroutine;

class PointContext
{
    use Singleton;

    protected $deferList = [];
    protected $point;
    protected $currentPointStack = [];
    /** @var SaveHandlerInterface */
    protected $saveHandler;
    protected $autoSave = false;
    protected $globalArg = [];

    public function createStart(string $name, ?string $serverName = null)
    {
        if (!isDebug()) {
            return null;
        }

        $traceId = \Swoole\Coroutine::getContext()['traceId'];
        if (empty($traceId)) {
            return null;
        }

        $point = new Point($name);
        \Swoole\Coroutine::getContext()['tracePoint'] = $point;
        return $point;
    }

    public function find(string $name): ?Point
    {
        if (!isDebug()) {
            return null;
        }

        $point = \Swoole\Coroutine::getContext()['tracePoint'] ?? null;
        if (empty($point) || !$point instanceof Point) {
            return null;
        }

        $action = $point->findChild($name);
        return $action;
    }

    public function getPoint(): ?Point
    {
        if (!isDebug()) {
            return null;
        }

        return \Swoole\Coroutine::getContext()['tracePoint'] ?? null;
    }

    public function endPoint()
    {
        $point = \Swoole\Coroutine::getContext()['tracePoint'] ?? null;
        if (empty($point) || !$point instanceof Point) {
            return null;
        }

        $point->setEndMemory(memory_get_usage());
        $point->end();
    }


    public function next(string $name)
    {
        if (!isDebug()) {
            return null;
        }

        /** @var \Es3\Tracker\Point $point */
        $point = \Swoole\Coroutine::getContext()['tracePoint'] ?? null;
        if (empty($point) || !$point instanceof Point) {
            return null;
        }
        $action = $point->appendChild($name);
        $action->setStartMemory(memory_get_usage());
        return $action;
    }
}
