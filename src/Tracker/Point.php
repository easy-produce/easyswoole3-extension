<?php


namespace Es3\Tracker;

use EasySwoole\Utility\Random;

class Point
{
    const END_FAIL = -1;
    const END_UNKNOWN = 0;
    const END_SUCCESS = 1;
    const END_BY_AUTO = 2;

    protected $startTime;
    protected $startArg;
    protected $startMemory;
    private $serviceName = 'default';
    protected $endTime;
    protected $endMemory;
    protected $pointName;
    private $status = self::END_UNKNOWN;
    protected $endArg;
    private $pointId;
    private $subPoints = [];
    /** @var Point */
    private $nextPoint;
    private $depth = 0;
    private $isNext = false;
    private $parentId = null;

    function __construct(string $pointName, $depth = 0, $isNext = false)
    {
        $this->pointName = $pointName;
        $this->depth = $depth;
        $this->startTime = round(microtime(true), 4);
        $this->isNext = $isNext;
        $this->pointId = Random::makeUUIDV4();
    }

    public function getServiceName(): string
    {
        return $this->serviceName;
    }

    public function setServiceName(string $serviceName): Point
    {
        $this->serviceName = $serviceName;
        return $this;
    }

    function setParentId(string $id): Point
    {
        $this->parentId = $id;
        return $this;
    }

    function parentId(): ?string
    {
        return $this->parentId;
    }

    function depth(): int
    {
        return $this->depth;
    }

    function next(string $pointName): Point
    {
        if (!isset($this->nextPoint)) {
            $this->nextPoint = new Point($pointName, $this->depth, true);
            $this->nextPoint->setParentId($this->pointId);
        }
        return $this->nextPoint;
    }

    function isNext()
    {
        return $this->isNext;
    }

    function hasNextPoint(): ?Point
    {
        return $this->nextPoint;
    }

    function appendChild(string $pointName)
    {
        $point = $this->findChild($pointName);
        if ($point) {
            return $point;
        } else {
            $point = new Point($pointName, $this->depth + 1);
            $point->setParentId($this->pointId);
            $this->subPoints[] = $point;
            return $point;
        }
    }

    function findChild(string $pointName): ?Point
    {
        /** @var Point $point */
        foreach ($this->subPoints as $point) {
            if ($point->getPointName() == $pointName) {
                return $point;
            }
        }
        return null;
    }

    function find(string $name): ?Point
    {
        $temp = $this;
        while (1) {
            if ($temp->getPointName() == $name) {
                return $temp;
            } elseif ($temp->hasNextPoint()) {
                $temp = $temp->hasNextPoint();
            } else {
                break;
            }
        }
        return null;
    }

    function children(): array
    {
        return $this->subPoints;
    }

    function pointId()
    {
        return $this->pointId;
    }

    function end($arg = null)
    {
        $this->status = self::END_SUCCESS;
        $this->endArg = $arg ? $arg : $this->endArg;
        $this->endTime = round(microtime(true), 4);
        return true;
    }

    public function getStartTime(): float
    {
        return $this->startTime;
    }

    public function setStartTime(float $startTime): Point
    {
        $this->startTime = $startTime;
        return $this;
    }

    public function getStartArg()
    {
        return $this->startArg;
    }

    public function setStartArg($startArg): Point
    {
        $this->startArg = $startArg;
        return $this;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function setEndTime($endTime): Point
    {
        $this->endTime = $endTime;
        return $this;
    }

    public function getPointName(): string
    {
        return $this->pointName;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getEndArg()
    {
        return $this->endArg;
    }

    public function setEndArg($endArg): Point
    {
        $this->endArg = $endArg;
        return $this;
    }

    public static function toString(Point $point, $depth = 0)
    {
        $string = '';
        $string .= str_repeat("\t", $depth) . "\n##\n";
        $string .= str_repeat("\t", $depth) . "name: {$point->getPointName()}\n";
//        $string .= str_repeat("\t",$depth)."ServiceName:{$point->getServiceName()}\n";
//        $status = self::statusToStr($point->getStatus());
//        $string .= str_repeat("\t",$depth)."Status:{$status}\n";
//        $string .= str_repeat("\t",$depth)."PointId:{$point->pointId()}\n";
//        $string .= str_repeat("\t",$depth)."ParentId:{$point->parentId()}\n";
//        $string .= str_repeat("\t",$depth)."Depth:{$point->depth()}\n";
//        $string .= str_repeat("\t",$depth)."IsNext:". ($point->isNext() ? 'true' : 'false') ."\n";
        $string .= str_repeat("\t", $depth) . "start_time: " . date('Y-m-d H:i:s', $point->getStartTime()) . " [{$point->getStartTime()}]\n";
        $string .= str_repeat("\t", $depth) . "ended_time: " . date('Y-m-d H:i:s', $point->getEndTime()) . " [{$point->getEndTime()}]\n";

        if ($point->getEndTime() && $point->getStartTime()) {
            $string .= str_repeat("\t", $depth) . "ms: " . (round(($point->getEndTime() - $point->getStartTime()) * 1000, 2)) . "\n\n";
        }

        if ($point->getStartArg()) {
            $string .= str_repeat("\t", $depth) . "start_arg: " . (static::argToString($point->getStartArg())) . "\n";
        }
        if ($point->getEndArg()) {
            $string .= str_repeat("\t", $depth) . "ended_arg: " . (static::argToString($point->getEndArg())) . "\n\n";
        }

        if ($point->getStartMemory()) {
            $string .= str_repeat("\t", $depth) . "start_memory: " . (static::argToString($point->getStartMemory())) . " [" . round($point->getStartMemory() / (1024 * 1024), 2) . 'MB] ' . "\n";
        }
        if ($point->getEndMemory()) {
            $string .= str_repeat("\t", $depth) . "ended_memory: " . (static::argToString($point->getEndMemory())) . " [" . round($point->getEndMemory() / (1024 * 1024), 2) . 'MB]' . "\n";
        }

        if ($point->getStartMemory() && $point->getEndMemory()) {
            $mb = round(($point->getEndMemory() - $point->getStartMemory()) / (1024 * 1024), 2) . " MB";
            $string .= str_repeat("\t", $depth) . "" . $mb . "\n\n";
        }

        if (count($point->children()) > 0) {
            $string .= str_repeat("\t", $depth) . "调用方法: " . (count($point->children())) . "\n";
        }

        if (!empty($point->children())) {

            $string .= str_repeat("\t", $depth) . "查询数据: " . getAtomicByTraceId('count_mysql') . "\n";
            $string .= str_repeat("\t", $depth) . "调用协程: " . getAtomicByTraceId('count_go') . "\n";
            $string .= str_repeat("\t", $depth) . "外部调用: " . getAtomicByTraceId('count_curl') . "\n";
            $string .= str_repeat("\t", $depth) . "应用加锁: " . getAtomicByTraceId('count_lock') . "\n";
            $string .= str_repeat("\t", $depth) . "文件日志: " . getAtomicByTraceId('count_log') . "\n";
            $string .= str_repeat("\t", $depth) . "操作日志: " . getAtomicByTraceId('count_log_operation') . "\n";

//            $string .= str_repeat("\t", $depth) . "调用过程: \n";
            $children = $point->children();
            foreach ($children as $child) {
                $string .= static::toString($child, $depth + 1);
            }
        } else {
//            $string .= str_repeat("\t",$depth)."Children:None\n";
        }

        if ($point->hasNextPoint()) {
//            $string .= str_repeat("\t",$depth)."NextPoint:\n";
//            $string .= static::toString($point->hasNextPoint(),$depth+1);
        } else {
//            $string .= str_repeat("\t",$depth)."NextPoint:None\n";
        }
        return $string;
    }

    public static function toArray(Point $point): array
    {
        $ret = [];
        $temp = [
            'name' => $point->getPointName(),
//            'pointId'=>$point->pointId(),
//            'parentId'=>$point->parentId(),
            'start_time' => $point->getStartTime(),
            'end_time' => $point->getEndTime(),

            'start_arg' => $point->getStartArg(),
            'end_arg' => $point->getEndArg(),

            'node' => count($point->children()),
            'node_list' => $point->children(),

            'ms' => null,
//            'status'=>$point->getStatus(),
//            'depth'=>$point->depth(),
//            'isNext'=>$point->isNext()
        ];

        if ($point->getEndTime() && $point->getStartTime()) {
            $temp['ms'] = $point->getEndTime() - $point->getStartTime();
        }

        $ret[] = $temp;
        if (!empty($point->children())) {
            foreach ($point->children() as $child) {
                $temp = static::toArray($child);
                foreach ($temp as $item) {
                    $ret[] = $item;
                }
            }
        }
        if ($point->hasNextPoint()) {
            $temp = static::toArray($point->hasNextPoint());
            foreach ($temp as $item) {
                $ret[] = $item;
            }
        }
        return $ret;
    }

    private static function argToString($arg)
    {
        if ($arg === null) {
            return 'null';
        } else if ($arg === true || $arg === false) {
            return $arg ? 'true' : 'false';
        } else if (is_array($arg)) {
            return json_encode($arg, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        } else {
            return (string)$arg;
        }
    }

    public static function statusToStr(int $status)
    {
        switch ($status) {
            case self::END_SUCCESS:
            {
                return 'success';
            }
            case self::END_FAIL:
            {
                return 'fail';
            }
            case self::END_BY_AUTO:
            {
                return 'auto-end';
            }
            default:
            case self::END_UNKNOWN:
            {
                return 'unknown';
            }
        }
    }

    public function recursive(callable $call)
    {
        call_user_func($call, $this);
        $this->end(static::END_BY_AUTO);
        /** @var Point $child */
        foreach ($this->children() as $child) {
            $child->recursive($call);
        }
        if ($this->nextPoint) {
            $this->nextPoint->recursive($call);
        }
    }

    /**
     * @return mixed
     */
    public function getStartMemory()
    {
        return $this->startMemory;
    }

    /**
     * @param mixed $startMemory
     */
    public function setStartMemory($startMemory): void
    {
        $this->startMemory = $startMemory;
    }

    /**
     * @return mixed
     */
    public function getEndMemory()
    {
        return $this->endMemory;
    }

    /**
     * @param mixed $endMemory
     */
    public function setEndMemory($endMemory): void
    {
        $this->endMemory = $endMemory;
    }
}
