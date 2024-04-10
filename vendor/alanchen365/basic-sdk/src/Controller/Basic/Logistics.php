<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\LogisticsService;

class Logistics extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return LogisticsService
     */
    public function getService(): LogisticsService
    {
        return $this->service;
    }
}