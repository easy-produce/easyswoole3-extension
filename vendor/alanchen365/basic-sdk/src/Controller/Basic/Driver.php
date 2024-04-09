<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\DriverService;

class Driver extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return DriverService
     */
    public function getService(): DriverService
    {
        return $this->service;
    }
}