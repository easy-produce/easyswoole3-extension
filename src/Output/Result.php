<?php

namespace Es3\Output;

use App\Constant\AppConst;
use App\Constant\ResultConst;
use EasySwoole\Component\Context\ContextManager;
use EasySwoole\Component\Di;
use Es3\EsConfig;

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

        $file = str_replace(EASYSWOOLE_ROOT, '', $this->_file ?? '');
        $file = str_replace('.php', '.java', basename($file)) . " [$this->_line]";

        $data = [
            ResultConst::CODE_KEY => $this->_code,
            ResultConst::DATE_KEY => $result,
            ResultConst::MSG_KEY => $this->_msg . " {$file}",
//            'file' => $file,
//            'line' => $this->_line,
//            ResultConst::TRACE_KEY => $this->_trace,
            ResultConst::TIME_KEY => date(ResultConst::TIME_FORMAT),
            'trace_id' => ContextManager::getInstance()->get(AppConst::DI_TRACE_CODE),
        ];

        // 不是生产环境增加追踪机制
        if (!isProduction()) {
            $data['trace'] = $this->_trace;
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
