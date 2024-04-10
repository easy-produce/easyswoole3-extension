<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\StoreAddressService;

class StoreAddress extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return StoreAddressService
     */
    public function getService(): StoreAddressService
    {
        return $this->service;
    }
}