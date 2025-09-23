<?php

namespace Es3\Output;

use App\Constant\AppConst;
use App\Constant\ResultConst;
use EasySwoole\Component\Context\ContextManager;
use EasySwoole\Component\Di;
use Es3\Constant\EsConst;
use Es3\EsConfig;
use Es3\Utility\Text;

class Result
{
    private $_code;
    private $_msg;
    private $_file;
    private $_line;
    private $_result;
    private $_trace;

    public function __construct()
    {
    }

    /**
     * @param mixed $code
     */
    public function setCode(int $code): void
    {
        $this->_code = $code;
    }

    /**
     * @return mixed
     */
    public function getTrace()
    {
        return $this->_trace;
    }

    /**
     * @param mixed $trace
     */
    public function setTrace($trace): void
    {
        $this->_trace = $trace;
    }

    /**
     * @param mixed $msg
     */
    public function setMsg(string $msg): void
    {
        $this->_msg = $msg;
    }

    public function set(string $key, $value, bool $overlay = true): void
    {
        //key为空或不是字串
        if (!$key) {
            return;
        }
        //禁止覆盖
        if ((!$overlay) && isset($this->_result[$key])) {
            return;
        }
        $this->_result[$key] = $value;
    }

    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->_file;
    }

    /**
     * @param mixed $file
     */
    public function setFile($file): void
    {
        $this->_file = $file;
    }

    /**
     * @return mixed
     */
    public function getLine()
    {
        return $this->_line;
    }

    /**
     * @param mixed $line
     */
    public function setLine($line): void
    {
        $this->_line = $line;
    }

    public function toArray(): array
    {
        $result = empty($this->_result) ? (object)[] : $this->_result;

        if (ContextManager::getInstance()->get(\Es3\Constant\ResultConst::FILE_KEY)) {
            $line = ContextManager::getInstance()->get(\Es3\Constant\ResultConst::LINE_KEY);
            $file = Text::phpToJava(ContextManager::getInstance()->get(\Es3\Constant\ResultConst::FILE_KEY), $line);
            $trace = ContextManager::getInstance()->get(\Es3\Constant\ResultConst::TRACE_KEY);
        } else {
            $line = $this->_line;;
            $file = Text::phpToJava($this->_file, $line);
            $trace = $this->_trace;
        }

        $req = \Swoole\Coroutine::getContext()[EsConst::ES_RUNNING_RECORD];


        $data = [
            ResultConst::CODE_KEY => $this->_code,
            ResultConst::DATE_KEY => $result,
            ResultConst::MSG_KEY => "{$this->_msg}"
        ];

        // 不是生产环境增加追踪机制
        if (!isProduction() || isDebug()) {

            // 获取请求时间（如果是秒级时间戳，需要转成浮点数）
            $requestTimestamp = $req->request_time ?? time();
            $responseTimestamp = microtime(true);

            // 计算处理时间（毫秒）
            $timeDiffMs = round(($responseTimestamp - $requestTimestamp) * 1000, 3);

            // 格式化时间（含毫秒）
            $requestDateTime = \DateTime::createFromFormat('U.u', sprintf('%.6f', $requestTimestamp));
            $responseDateTime = \DateTime::createFromFormat('U.u', sprintf('%.6f', $responseTimestamp));

            $data['request_time'] = $requestDateTime->format('Y-m-d H:i:s.v');
            $data['response_time'] = $responseDateTime->format('Y-m-d H:i:s.v');
            $data['process_time'] = "{$timeDiffMs}ms";

            $data['file'] = $file;
            $data['line'] = $line;
            $data['trace'] = $this->getTrace();
            $data['trace_id'] = ContextManager::getInstance()->get(AppConst::DI_TRACE_CODE);
        }

//        if (empty($this->_result)) {
//            unset($data['data']);
//        }

        return $data;
    }

    public function del($key): void
    {
        if (isset($this->_result[$key])) {
            unset($this->_result[$key]);
        }

        return;
    }

    public function clear(): void
    {
        foreach ((array)$this->_result as $key => $item) {
            unset($this->_result[$key]);
        }
    }
}
