<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\OwnerInvoiceAddressModel;

class OwnerInvoiceAddressDao extends BaseBasicDao
{
    public function __construct()
    {
        $this->setModel(new OwnerInvoiceAddressModel());
    }

    /**
     * model
     * @return OwnerInvoiceAddressModel
     */
    public function getModel(): OwnerInvoiceAddressModel
    {
        return $this->model;
    }
}
