<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\ProductUnitModel;

class ProductUnitDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new ProductUnitModel());
    }

    /**
     * model
     * @return ProductUnitModel
     */
    public function getModel(): ProductUnitModel
    {
        return $this->model;
    }
}
