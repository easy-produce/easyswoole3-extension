<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\OwnerToInvoiceAddressModel;

class OwnerToInvoiceAddressDao extends BaseBasicDao
{
    public function __construct()
    {
        $this->setModel(new OwnerToInvoiceAddressModel());
    }

    /**
     * model
     * @return OwnerToInvoiceAddressModel
     */
    public function getModel(): OwnerToInvoiceAddressModel
    {
        return $this->model;
    }
}
