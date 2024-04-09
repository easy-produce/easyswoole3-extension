<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\StoreModel;

class StoreDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new StoreModel());
    }

    /**
     * model
     * @return StoreModel
     */
    public function getModel(): StoreModel
    {
        return $this->model;
    }
}
