<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\ProductUnitNameModel;

class ProductUnitNameDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new ProductUnitNameModel());
    }

    /**
     * model
     * @return ProductUnitNameModel
     */
    public function getModel(): ProductUnitNameModel
    {
        return $this->model;
    }
}
