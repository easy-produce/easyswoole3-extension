<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\StoreService;

class Store extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return StoreService
     */
    public function getService(): StoreService
    {
        return $this->service;
    }
}