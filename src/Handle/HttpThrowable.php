<?php

namespace Es3\Handle;

use EasySwoole\Http\Request;
use EasySwoole\Http\Response;
use Es3\Output\Json;

class HttpThrowable
{
    public static function run(\Throwable $throwable, Request $request, Response $response)
    {
        Json::fail($throwable, $throwable->getCode(), $throwable->getMessage());
    }
}