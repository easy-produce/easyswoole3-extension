<?php

namespace Es3\Handle;

use App\Constant\EnvConst;
use App\Module\Callback\Service\TaskService;
use EasySwoole\Component\Context\ContextManager;
use EasySwoole\EasySwoole\Task\TaskManager;
use EasySwoole\Http\Request;
use EasySwoole\Http\Response;
use EasySwoole\ORM\DbManager;
use Es3\Constant\EsConst;
use Es3\Log\LogBean;
use Es3\Output\Json;

use EasySwoole\Log\LoggerInterface;
use Es3\Trace;
use Es3\Utility\File;
use Es3\Utility\Text;
use Swoole\Coroutine;

class LoggerHandel implements LoggerInterface
{
    const LOG_LEVEL_WARNING_CENTER = 5;

    protected $trace;  //抛出异常时的调用过程
    protected $file;  //抛出日志的文件
    protected $line;  //抛出日志的文件代码行号

    private $logDir;
    private $logConsole = false;

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
        // 创建时间
        $date = date('Y-m-d H:i:s');
        // 分类
        $category = strtolower($category);
        // 项目
        $project = strtolower(EnvConst::SERVICE_NAME);
        // 等级
        $levelStr = strtolower($this->levelMap($logLevel));
        // 请求Id
        $traceId = Trace::getRequestId();
        // env
        $runEnv = isHttp() ? 'http' : 'progres';
        // request
        $request = requestLog();

        $logPath = "{$this->logDir}/{$levelStr}/{$category}";

        clearstatcache();
        is_dir($logPath) ? null : File::createDirectory($logPath, 0777);

        $fileDate = date('Ymd', time());
        $filePath = "{$logPath}/{$fileDate}.log";

        // 代码中增加用户Id
        $accountId = empty(createUserId()) ? -1 : createUserId();

        $data = [
            'title' => "[{$date}][{$project}][{$category}][{$accountId}][{$levelStr}][{$traceId}]",
            'content' => Text::clearEscape($msg),
            'file' => "{$this->getFile()}",
            'server' => [
                'pid' => getmypid(),
                'is_master' => isMaster(),
                'is_http' => isHttp(),
                'request' => $request,
                'trace_id' => traceId(),
//                'trace' => implode(',', $this->getTrace() ?? []),
                'trace' => $this->getTrace()
            ],
        ];

        if (isHttp()) {
            $mysqlQuery = ContextManager::getInstance()->get(EsConst::ES_LOG_MYSQL_QUERY);
            $lastQuery = isset($mysqlQuery->lastQuery) ? $mysqlQuery->lastQuery : [];
            $data['last_query'] = $lastQuery;
            $mysqlQueryCont = count($lastQuery);
        }

        $string = jsonEncode($data);

        // 如果mysql查询行数超过20 单独记日志
        if (isHttp() && $mysqlQueryCont >= 20) {
            $mysqlSlowPath = "{$this->logDir}/slow/mysql-{$mysqlQueryCont}";
            is_dir($mysqlSlowPath) ? null : File::createDirectory($mysqlSlowPath, 0777);
            $mysqlSlowFilePath = "{$mysqlSlowPath}/{$fileDate}.log";
            file_put_contents($mysqlSlowFilePath, "{$string}" . "\n", FILE_APPEND | LOCK_EX);
        }

        setAtomicByTraceId('count_log');

        file_put_contents($filePath, "{$string}" . "\n", FILE_APPEND | LOCK_EX);
        fwrite(STDOUT, "\n" . $string . "\n");
        return '';
    }

    function console(?string $msg, int $logLevel = self::LOG_LEVEL_INFO, string $category = 'console')
    {
//        $this->log($msg, $logLevel, $category);
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