<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\ProductToTypeDao;

class ProductToTypeService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new ProductToTypeDao());
    }

    /**
     * dao
     * @return ProductToTypeDao
     */
    public function getDao(): ProductToTypeDao
    {
        return $this->dao;
    }
}
