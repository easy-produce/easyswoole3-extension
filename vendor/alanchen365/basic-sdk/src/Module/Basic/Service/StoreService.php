<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\StoreDao;

class StoreService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new StoreDao());
    }

    /**
     * dao
     * @return StoreDao
     */
    public function getDao(): StoreDao
    {
        return $this->dao;
    }
}
