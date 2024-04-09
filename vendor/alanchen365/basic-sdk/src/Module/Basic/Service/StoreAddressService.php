<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\StoreAddressDao;

class StoreAddressService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new StoreAddressDao());
    }

    /**
     * dao
     * @return StoreAddressDao
     */
    public function getDao(): StoreAddressDao
    {
        return $this->dao;
    }
}
