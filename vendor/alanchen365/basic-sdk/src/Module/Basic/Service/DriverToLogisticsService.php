<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\DriverToLogisticsDao;

class DriverToLogisticsService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new DriverToLogisticsDao());
    }

    /**
     * dao
     * @return DriverToLogisticsDao
     */
    public function getDao(): DriverToLogisticsDao
    {
        return $this->dao;
    }
}
