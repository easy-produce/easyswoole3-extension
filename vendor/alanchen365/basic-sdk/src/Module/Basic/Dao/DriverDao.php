<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\DriverModel;

class DriverDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new DriverModel());
    }

    /**
     * model
     * @return DriverModel
     */
    public function getModel(): DriverModel
    {
        return $this->model;
    }
}
