<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\StoreDepotService;

class StoreDepot extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return StoreDepotService
     */
    public function getService(): StoreDepotService
    {
        return $this->service;
    }
}