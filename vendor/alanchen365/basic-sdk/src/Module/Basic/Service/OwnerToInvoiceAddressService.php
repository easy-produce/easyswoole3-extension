<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\OwnerToInvoiceAddressDao;

class OwnerToInvoiceAddressService extends BaseBasicService
{
    public function __construct()
    {
        $this->setDao(new OwnerToInvoiceAddressDao());
    }

    /**
     * dao
     * @return OwnerToInvoiceAddressDao
     */
    public function getDao(): OwnerToInvoiceAddressDao
    {
        return $this->dao;
    }
}
