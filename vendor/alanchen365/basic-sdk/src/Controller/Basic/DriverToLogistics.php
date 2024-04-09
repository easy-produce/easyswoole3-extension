<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\DriverToLogisticsService;

class DriverToLogistics extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return DriverToLogisticsService
     */
    public function getService(): DriverToLogisticsService
    {
        return $this->service;
    }
}