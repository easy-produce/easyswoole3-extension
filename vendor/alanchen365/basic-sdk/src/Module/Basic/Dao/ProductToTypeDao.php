<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\ProductToTypeModel;

class ProductToTypeDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new ProductToTypeModel());
    }

    /**
     * model
     * @return ProductToTypeModel
     */
    public function getModel(): ProductToTypeModel
    {
        return $this->model;
    }
}
