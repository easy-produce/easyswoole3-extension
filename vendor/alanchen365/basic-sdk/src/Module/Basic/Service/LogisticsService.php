<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\LogisticsDao;

class LogisticsService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new LogisticsDao());
    }

    /**
     * dao
     * @return LogisticsDao
     */
    public function getDao(): LogisticsDao
    {
        return $this->dao;
    }
}
