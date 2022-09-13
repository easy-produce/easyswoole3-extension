<?php

namespace Es3\Output;

use App\Constant\AppConst;
use EasySwoole\Component\Context\ContextManager;
use EasySwoole\Component\Di;
use EasySwoole\Template\Render;

class Html
{
    public static function show(string $file): void
    {
//        $response = Di::getInstance()->get(AppConst::DI_RESPONSE);
        $response = ContextManager::getInstance()->get(AppConst::DI_RESPONSE);

        $response->write(file_get_contents($file));
        $response->end();
    }

    public static function render(string $template, array $data = [], array $options = []): void
    {
//        $response = Di::getInstance()->get(AppConst::DI_RESPONSE);
        $response = ContextManager::getInstance()->get(AppConst::DI_RESPONSE);

        $response->write(Render::getInstance()->render($template, $data, $options));
        $response->end();
    }
}
