<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\DepotModel;

class DepotDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new DepotModel());
    }

    /**
     * model
     * @return DepotModel
     */
    public function getModel(): DepotModel
    {
        return $this->model;
    }
}
