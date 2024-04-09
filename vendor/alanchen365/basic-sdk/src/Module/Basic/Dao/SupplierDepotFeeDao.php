<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\SupplierDepotFeeModel;

class SupplierDepotFeeDao extends BaseBasicDao
{
    public function __construct()
    {
        $this->setModel(new SupplierDepotFeeModel());
    }

    /**
     * model
     * @return SupplierDepotFeeModel
     */
    public function getModel(): SupplierDepotFeeModel
    {
        return $this->model;
    }
}
