<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\OwnerDepotDao;

class OwnerDepotService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new OwnerDepotDao());
    }

    /**
     * dao
     * @return OwnerDepotDao
     */
    public function getDao(): OwnerDepotDao
    {
        return $this->dao;
    }
}
