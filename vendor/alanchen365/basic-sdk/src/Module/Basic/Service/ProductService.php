<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\ProductDao;

class ProductService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new ProductDao());
    }

    /**
     * dao
     * @return ProductDao
     */
    public function getDao(): ProductDao
    {
        return $this->dao;
    }
}
