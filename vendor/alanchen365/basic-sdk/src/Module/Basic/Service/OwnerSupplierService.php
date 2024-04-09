<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\OwnerSupplierDao;

class OwnerSupplierService extends BaseBasicService
{
    public function __construct()
    {
        $this->setDao(new OwnerSupplierDao());
    }

    /**
     * dao
     * @return OwnerSupplierDao
     */
    public function getDao(): OwnerSupplierDao
    {
        return $this->dao;
    }
}
