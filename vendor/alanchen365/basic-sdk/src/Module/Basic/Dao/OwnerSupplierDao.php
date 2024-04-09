<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\OwnerSupplierModel;

class OwnerSupplierDao extends BaseBasicDao
{
    public function __construct()
    {
        $this->setModel(new OwnerSupplierModel());
    }

    /**
     * model
     * @return OwnerSupplierModel
     */
    public function getModel(): OwnerSupplierModel
    {
        return $this->model;
    }
}
