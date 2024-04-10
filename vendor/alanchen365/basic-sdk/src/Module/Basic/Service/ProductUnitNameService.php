<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\ProductUnitNameDao;

class ProductUnitNameService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new ProductUnitNameDao());
    }

    /**
     * dao
     * @return ProductUnitNameDao
     */
    public function getDao(): ProductUnitNameDao
    {
        return $this->dao;
    }
}
