<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\ProductModel;

class ProductDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new ProductModel());
    }

    /**
     * model
     * @return ProductModel
     */
    public function getModel(): ProductModel
    {
        return $this->model;
    }
}
