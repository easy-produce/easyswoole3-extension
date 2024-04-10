<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\ExpressStoreDao;

class ExpressStoreService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new ExpressStoreDao());
    }

    /**
     * dao
     * @return ExpressStoreDao
     */
    public function getDao(): ExpressStoreDao
    {
        return $this->dao;
    }
}
