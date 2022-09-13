<?php

namespace Es3\Handle;

use App\Constant\EnvConst;
use App\Module\Callback\Service\TaskService;
use EasySwoole\EasySwoole\Task\TaskManager;
use EasySwoole\Http\Request;
use EasySwoole\Http\Response;
use Es3\Log\LogBean;
use Es3\Output\Json;

use EasySwoole\Log\LoggerInterface;
use Es3\Trace;
use Es3\Utility\File;
use Swoole\Coroutine;

class LoggerHandel implements LoggerInterface
{
    const LOG_LEVEL_WARNING_CENTER = 5;

    protected $trace;  //抛出异常时的调用过程
    protected $file;  //抛出日志的文件
    protected $line;  //抛出日志的文件代码行号

    private $logDir;

    function __construct(string $logDir = null)
    {
        if (empty($logDir)) {
            $logDir = getcwd();
        }
        $this->logDir = strtolower($logDir);
    }

    /**
     * 程序中所有的log都会走到这里
     * @param string|null $msg
     * @param int $logLevel
     * @param string $category
     * @return string
     */
    function log(?string $msg, int $logLevel = self::LOG_LEVEL_INFO, string $category = 'debug'): string
    {
        // 对日志赋值
        $logbean = new LogBean();
        // 设置日志等级
        $logbean->setLevel(strtolower($this->levelMap($logLevel)));
        // 设置日志分类
        $logbean->setCategory($category);
        // 设置日志内容
        $logbean->setMsg($msg);
        $logbean->setFile($this->file);
        $logbean->setLine($this->line);
        $logbean->setTrace($this->trace);

//        $traceCode = Trace::getRequestId();

        $date = date('Y-m-d H:i:s');
        $category = strtolower($category);
        $project = strtolower(EnvConst::SERVICE_NAME);
        $levelStr = strtolower($this->levelMap($logLevel));
        $logPath = "{$this->logDir}/{$category}/{$levelStr}";

        clearstatcache();
        is_dir($logPath) ? null : File::createDirectory($logPath, 0777);

        $fileDate = date('Ymd', time());
        $filePath = "{$logPath}/{$fileDate}.log";


        // 通过日志分类截取日志负责人
        $categoryLen = mb_strlen($category);
        $leaderName = null;

        if (strpos($category, '-') && $categoryLen > 3) {
            $leaderName = explode('-', $category);
            $leaderName = current($leaderName) ?? null;
        }

        // 设置负责人名称
        $logbean->setLeaderName($leaderName);
        $str = jsonEncode($logbean->toArray()) . "\n";

//        Coroutine::create(function () use ($filePath, $str) {
//        file_put_contents($filePath, "{$str}", FILE_APPEND | LOCK_EX);
//        });

//        if (isHttp()) {
//            TaskManager::getInstance()->async(function ($filePath, $str) {
//                file_put_contents($filePath, stripslashes("{$str}"), FILE_APPEND | LOCK_EX);
//            });
//        } else {
        file_put_contents($filePath, stripslashes("{$str}"), FILE_APPEND | LOCK_EX);
//        }
        return '';
    }

    function console(?string $msg, int $logLevel = self::LOG_LEVEL_INFO, string $category = 'console')
    {
        if (isProduction()) {
            return;
        }

        $date = date('Y-m-d H:i:s');
        $levelStr = $this->levelMap($logLevel);
        $temp = "[{$date}][{$category}][{$levelStr}]:[{$msg}]\n";
        fwrite(STDOUT, stripslashes($temp));
    }

    private function levelMap(int $level): string
    {
        switch ($level) {
            case self::LOG_LEVEL_INFO:
                return 'info';
            case self::LOG_LEVEL_NOTICE:
                return 'notice';
            case self::LOG_LEVEL_WARNING:
                return 'warning';
            case self::LOG_LEVEL_ERROR:
                return 'error';
            case self::LOG_LEVEL_WARNING_CENTER:
                return 'warning_center';
            default:
                return 'unknown';
        }
    }

    public function mapToLevel(string $map): int
    {
        switch ($map) {
            case 'info':
                return 2;
            case 'notice':
                return 2;
            case 'warning':
                return 3;
            case 'error':
                return 4;
            case 'warning_center':
                return 5;
            default:
                return -1;
        }
    }

    /**
     * @param mixed $trace
     */
    public function setTrace($trace): void
    {
        $this->trace = $trace;
    }

    /**
     * @param mixed $file
     */
    public function setFile($file): void
    {
        $this->file = $file;
    }

    /**
     * @param mixed $line
     */
    public function setLine($line): void
    {
        $this->line = $line;
    }

    /**
     * @return mixed
     */
    public function getTrace()
    {
        return $this->trace;
    }

    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @return mixed
     */
    public function getLine()
    {
        return $this->line;
    }
}