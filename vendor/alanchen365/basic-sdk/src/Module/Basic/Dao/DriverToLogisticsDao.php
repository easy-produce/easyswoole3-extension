<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\DriverToLogisticsModel;

class DriverToLogisticsDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new DriverToLogisticsModel());
    }

    /**
     * model
     * @return DriverToLogisticsModel
     */
    public function getModel(): DriverToLogisticsModel
    {
        return $this->model;
    }
}
