<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\CarModel;

class CarDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new CarModel());
    }

    /**
     * model
     * @return CarModel
     */
    public function getModel(): CarModel
    {
        return $this->model;
    }
}
