<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\RbacUserDepotService;

class RbacUserDepot extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return RbacUserDepotService
     */
    public function getService(): RbacUserDepotService
    {
        return $this->service;
    }
}