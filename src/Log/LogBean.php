<?php

namespace Es3\Log;

use App\Constant\AppConst;
use App\Constant\EnvConst;
use App\Constant\LoggerConst;
use EasySwoole\Component\Di;
use EasySwoole\Http\Request;
use EasySwoole\LinuxDash\LinuxDash;
use Es3\Constant\ResultConst;
use Es3\Output\Result;
use Es3\Trace;
use http\Env;

/**
 * 操作日志bean
 */
class LogBean extends \EasySwoole\Spl\SplBean
{
    protected $env;  //程序运行环境(http\process)
    protected $requestId;  //请求的唯一id
    protected $category;  //日志分类
    protected $level;  //日志等级 debug、info、noice、waning、error
    protected $projectName;  //项目名称
    protected $request;  //http的请求参数，包括请求头
    protected $response;  //http的响应参数，
    protected $msg;  //日志的内容
    protected $trace;  //抛出异常时的调用过程
    protected $file;  //抛出日志的文件
    protected $line;  //抛出日志的文件代码行号
    protected $time;
    protected $extend;
    protected $createUserName;
    protected $createUserId;
    protected $serverIp;
    protected $clientIp;
    protected $runTime;
    protected $leaderName;

    function __construct(array $data = null, $autoCreateProperty = false)
    {
        // 当前日志时间
        $this->setTime(date('Y-m-d H:i:s'));
        // 当前请求id
        $this->setRequestId(Trace::getRequestId());
        // 当前执行环境
        $this->setEnv(isHttp() ? 'http' : 'progres');
        // 当前项目名称
        $this->setProjectName(AppConst::SYSTEM_CODE);
        // 设置请求参数
        $this->setRequest(requestLog());
        // 设置所在文件
//        $this->setFile(Di::getInstance()->get(ResultConst::FILE_KEY));
        // 设置文件行数
//        $this->setLine(Di::getInstance()->get(ResultConst::LINE_KEY));
        // 设置调用堆栈
//        $this->setTrace(Di::getInstance()->get(ResultConst::TRACE_KEY));
        // 设置
        $this->setResponse(Di::getInstance()->get(\Es3\Constant\ResultConst::RESPONSE_KEY));
        // 在日志中写入自定义参数 限制100个字符
        $this->setExtend(getLogExtend());
        // 设置创建人、创建id
        $this->setCreateUserId(createUserCode());
        $this->setCreateUserName(createUserName());

        // 获取服务器id
        $serverIp = (new \ReflectionClass(EnvConst::class))->getConstant('SERVER_IP');
        $serverIp = superEmpty($serverIp) ? '0.0.0.0' : EnvConst::SERVER_IP;
        $this->setServerIp($serverIp);
        $this->setClientIp(clientIp());

        // 运行时间计算
        /** 从请求里获取之前增加的时间戳 */
        $request = Di::getInstance()->get(AppConst::DI_REQUEST);
        if ($request instanceof Request) {
            $reqTime = $request->getAttribute(LoggerConst::LOG_NAME_ACCESS);
            $runTime = round(microtime(true) - $reqTime, 5);
            $runTime = round(floatval($runTime * 1000), 0);
            $this->setRunTime($runTime . 'ms');
        }
        
        parent::__construct($data, $autoCreateProperty);
    }

    /**
     * @return mixed
     */
    public function getEnv()
    {
        return $this->env;
    }

    /**
     * @param mixed $env
     */
    public function setEnv($env): void
    {
        $this->env = $env;
    }

    /**
     * @return mixed
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * @param mixed $requestId
     */
    public function setRequestId($requestId): void
    {
        $this->requestId = $requestId;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category): void
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param mixed $level
     */
    public function setLevel($level): void
    {
        $this->level = $level;
    }

    /**
     * @return mixed
     */
    public function getProjectName()
    {
        return $this->projectName;
    }

    /**
     * @param mixed $projectName
     */
    public function setProjectName($projectName): void
    {
        $this->projectName = $projectName;
    }

    /**
     * @return mixed
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param mixed $request
     */
    public function setRequest($request): void
    {
        $this->request = $request;
    }

    /**
     * @return mixed
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param mixed $response
     */
    public function setResponse($response): void
    {
        $this->response = $response;
    }

    /**
     * @return mixed
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param mixed $msg
     */
    public function setMsg($msg): void
    {
        $this->msg = $msg;
    }
//
    /**
     * @return mixed
     */
    public function getTrace()
    {
        return $this->trace;
    }

    /**
     * @param mixed $trace
     */
    public function setTrace($trace): void
    {
        $this->trace = $trace;
    }

    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param mixed $file
     */
    public function setFile($file): void
    {
        $this->file = $file;
    }

    /**
     * @return mixed
     */
    public function getLine()
    {
        return $this->line;
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
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param mixed $time
     */
    public function setTime($time): void
    {
        $this->time = $time;
    }

    /**
     * @return mixed
     */
    public function getExtend()
    {
        return $this->extend;
    }

    /**
     * @param mixed $extend
     */
    public function setExtend($extend): void
    {
        $this->extend = $extend;
    }

    /**
     * @return mixed
     */
    public function getCreateUserName()
    {
        return $this->createUserName;
    }

    /**
     * @param mixed $createUserName
     */
    public function setCreateUserName($createUserName): void
    {
        $this->createUserName = $createUserName;
    }

    /**
     * @return mixed
     */
    public function getCreateUserId()
    {
        return $this->createUserId;
    }

    /**
     * @param mixed $createUserId
     */
    public function setCreateUserId($createUserId): void
    {
        $this->createUserId = $createUserId;
    }

    /**
     * @return mixed
     */
    public function getServerIp()
    {
        return $this->serverIp;
    }

    /**
     * @param mixed $serverIp
     */
    public function setServerIp($serverIp): void
    {
        $this->serverIp = $serverIp;
    }

    /**
     * @return mixed
     */
    public function getClientIp()
    {
        return $this->clientIp;
    }

    /**
     * @param mixed $clientIp
     */
    public function setClientIp($clientIp): void
    {
        $this->clientIp = $clientIp;
    }

    /**
     * @return mixed
     */
    public function getRunTime()
    {
        return $this->runTime;
    }

    /**
     * @param mixed $runTime
     */
    public function setRunTime($runTime): void
    {
        $this->runTime = $runTime;
    }

    /**
     * @return mixed
     */
    public function getLeaderName()
    {
        return $this->leaderName;
    }

    /**
     * @param mixed $leaderName
     */
    public function setLeaderName($leaderName): void
    {
        $this->leaderName = $leaderName;
    }
}