<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\DriverDao;

class DriverService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new DriverDao());
    }

    /**
     * dao
     * @return DriverDao
     */
    public function getDao(): DriverDao
    {
        return $this->dao;
    }
}
