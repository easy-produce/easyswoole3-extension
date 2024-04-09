<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\DepotDao;

class DepotService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new DepotDao());
    }

    /**
     * dao
     * @return DepotDao
     */
    public function getDao(): DepotDao
    {
        return $this->dao;
    }
}
