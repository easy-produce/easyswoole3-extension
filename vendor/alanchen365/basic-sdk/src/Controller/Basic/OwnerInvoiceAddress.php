<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\OwnerInvoiceAddressService;

class OwnerInvoiceAddress extends BaseBasic
{


    /**
     * 获取service
     * @return OwnerInvoiceAddressService
     */
    public function getService(): OwnerInvoiceAddressService
    {
        return $this->service;
    }
}
