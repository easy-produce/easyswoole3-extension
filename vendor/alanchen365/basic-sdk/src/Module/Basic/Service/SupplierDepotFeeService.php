<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\SupplierDepotFeeDao;

class SupplierDepotFeeService extends BaseBasicService
{
    public function __construct()
    {
        $this->setDao(new SupplierDepotFeeDao());
    }

    /**
     * dao
     * @return SupplierDepotFeeDao
     */
    public function getDao(): SupplierDepotFeeDao
    {
        return $this->dao;
    }
}
