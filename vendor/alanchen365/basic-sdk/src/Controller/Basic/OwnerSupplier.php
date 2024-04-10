<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\OwnerSupplierService;

class OwnerSupplier extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return OwnerSupplierService
     */
    public function getService(): OwnerSupplierService
    {
        return $this->service;
    }
}
