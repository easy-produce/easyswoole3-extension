<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\OwnerAddressService;

class OwnerAddress extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return OwnerAddressService
     */
    public function getService(): OwnerAddressService
    {
        return $this->service;
    }
}