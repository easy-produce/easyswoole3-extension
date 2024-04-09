<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\ProductUnitDao;

class ProductUnitService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new ProductUnitDao());
    }

    /**
     * dao
     * @return ProductUnitDao
     */
    public function getDao(): ProductUnitDao
    {
        return $this->dao;
    }
}
