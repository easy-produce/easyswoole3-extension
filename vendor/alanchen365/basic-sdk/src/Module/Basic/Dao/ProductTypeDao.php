<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\ProductTypeModel;

class ProductTypeDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new ProductTypeModel());
    }

    /**
     * model
     * @return ProductTypeModel
     */
    public function getModel(): ProductTypeModel
    {
        return $this->model;
    }
}
