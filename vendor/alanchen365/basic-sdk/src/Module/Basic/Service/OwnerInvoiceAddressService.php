<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\OwnerInvoiceAddressDao;

class OwnerInvoiceAddressService extends BaseBasicService
{
    public function __construct()
    {
        $this->setDao(new OwnerInvoiceAddressDao());
    }

    /**
     * dao
     * @return OwnerInvoiceAddressDao
     */
    public function getDao(): OwnerInvoiceAddressDao
    {
        return $this->dao;
    }
}
