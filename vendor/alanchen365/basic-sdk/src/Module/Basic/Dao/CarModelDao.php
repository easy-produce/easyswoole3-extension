<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\CarModelModel;

class CarModelDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new CarModelModel());
    }

    /**
     * model
     * @return CarModelModel
     */
    public function getModel(): CarModelModel
    {
        return $this->model;
    }
}
