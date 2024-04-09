<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\StoreDepotModel;

class StoreDepotDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new StoreDepotModel());
    }

    /**
     * model
     * @return StoreDepotModel
     */
    public function getModel(): StoreDepotModel
    {
        return $this->model;
    }
}
