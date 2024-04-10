<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\ExpressService;

class Express extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return ExpressService
     */
    public function getService(): ExpressService
    {
        return $this->service;
    }
}