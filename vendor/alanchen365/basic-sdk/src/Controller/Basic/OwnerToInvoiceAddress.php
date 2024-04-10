<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\OwnerToInvoiceAddressService;

class OwnerToInvoiceAddress extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return OwnerToInvoiceAddressService
     */
    public function getService(): OwnerToInvoiceAddressService
    {
        return $this->service;
    }
}
