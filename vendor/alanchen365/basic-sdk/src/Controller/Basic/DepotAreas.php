<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\DepotAreasService;

class DepotAreas extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return DepotAreasService
     */
    public function getService(): DepotAreasService
    {
        return $this->service;
    }
}