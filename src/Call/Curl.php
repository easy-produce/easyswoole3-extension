<?php

namespace Es3\Call;

use EasySwoole\Component\Di;
use EasySwoole\EasySwoole\Logger;
use EasySwoole\HttpClient\Bean\Response;
use  EasySwoole\HttpClient\HttpClient;
use Es3\Exception\CurlException;
use Es3\Exception\ErrorException;
use Es3\Exception\InfoException;

class Curl extends HttpClient
{

    public function __construct(?string $url = null)
    {
        $this->url = $url;
        parent::__construct($url);
    }

    /**
     * @var 请求的url
     */
    protected $url;

    /**
     * @var bool 是否记录请求日志
     */
    protected $isLog = false;

    /**
     * @var bool 是否判断http请求是200
     */
    protected $is200 = true;

    /**
     * 设置请求头集合
     * @param array $header
     * @param bool $isMerge
     * @param bool strtolower
     * @return HttpClient
     */
    public function setHeaders(array $header, $isMerge = true, $strtolower = false): HttpClient
    {
        $this->clientHandler->getRequest()->setHeaders($header, $isMerge, $strtolower);
        return $this;
    }

    public function get(array $headers = []): Response
    {
        $response = parent::get($headers);
        $this->isSuccess($response);
        if ($this->is200) {
            $this->is200($response);
        }

        return $response;
    }

    public function post($data = null, array $headers = []): Response
    {
        $response = parent::post($data, $headers);
        $this->isSuccess($response);
        if ($this->is200) {
            $this->is200($response);
        }

        return $response;
    }

    public function delete(array $headers = []): Response
    {
        $response = parent::delete($headers);
        $this->isSuccess($response);
        if ($this->is200) {
            $this->is200($response);
        }

        return $response;
    }

    public function put($data = null, array $headers = []): Response
    {
        $response = parent::put($data, $headers);
        $this->isSuccess($response);
        if ($this->is200) {
            $this->is200($response);
        }

        return $response;
    }

    private function isSuccess(Response $response)
    {
        try {
            $errCode = $response->getErrCode();

            if ($this->isLog) {
                // 记录curl访问日志
                $result = [
                    'request' => [
                        'url' => $this->url,
                        'header' => $response->getRequestHeaders(),
                        'method' => $this->getClientHandler()->getRequest()->getMethod(),
                        'params' => $response->getRequestBody(),
                        'curl_setting' => $response->getSetting(),
                    ],

                    'response' => [
                        'host' => $response->getHost(),
                        'port' => $response->getPort(),
                        'header' => $response->getHeaders(),
                        'http_code' => $response->getStatusCode(),
                        'body' => $response->getBody(),
                        'error_code' => $response->getErrCode(),
                        'error_msg' => $response->getErrMsg(),
                    ],
                ];

                Logger::getInstance()->info(jsonEncode($result), 'curl');
            }

            if ($errCode !== 0) {
                throw new InfoException(1021, "访问远程网络 {$this->url} , 出现{$response->getErrMsg()}错误,请联系管理员反馈处理");
            }

        } catch (\Throwable $throwable) {
            setResultFile($throwable, 2);
            throw new CurlException($throwable->getCode(), $throwable->getMessage());
        }
    }

    private function is200(Response $response)
    {
        try {
            $code = $response->getStatusCode();
            if (200 != $code) {
                throw new InfoException(1020, '远程网络连接失败 http_code:' . $code . ' ' . $response->getBody());
            }
        } catch (\Throwable $throwable) {
            setResultFile($throwable, 2);
            throw new CurlException($throwable->getCode(), $throwable->getMessage());
        }
    }

    /**
     * @param bool $is200
     */
    public function setIs200(bool $is200): void
    {
        $this->is200 = $is200;
    }

    /**
     * @param bool $isLog
     */
    public function setIsLog(bool $isLog): void
    {
        $this->isLog = $isLog;
    }
}