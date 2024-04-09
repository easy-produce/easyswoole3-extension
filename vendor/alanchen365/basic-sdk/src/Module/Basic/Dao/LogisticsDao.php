<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\LogisticsModel;

class LogisticsDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new LogisticsModel());
    }

    /**
     * model
     * @return LogisticsModel
     */
    public function getModel(): LogisticsModel
    {
        return $this->model;
    }
}
