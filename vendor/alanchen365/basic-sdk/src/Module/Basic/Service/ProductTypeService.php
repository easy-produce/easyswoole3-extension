<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\ProductTypeDao;

class ProductTypeService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new ProductTypeDao());
    }

    /**
     * dao
     * @return ProductTypeDao
     */
    public function getDao(): ProductTypeDao
    {
        return $this->dao;
    }
}
