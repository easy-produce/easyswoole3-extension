<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\StoreDepotDao;

class StoreDepotService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new StoreDepotDao());
    }

    /**
     * dao
     * @return StoreDepotDao
     */
    public function getDao(): StoreDepotDao
    {
        return $this->dao;
    }
}
