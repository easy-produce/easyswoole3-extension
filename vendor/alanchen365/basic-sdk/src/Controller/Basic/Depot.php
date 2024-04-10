<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\DepotService;

class Depot extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return DepotService
     */
    public function getService(): DepotService
    {
        return $this->service;
    }
}