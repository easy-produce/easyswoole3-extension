<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\OwnerDepotService;

class OwnerDepot extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return OwnerDepotService
     */
    public function getService(): OwnerDepotService
    {
        return $this->service;
    }
}