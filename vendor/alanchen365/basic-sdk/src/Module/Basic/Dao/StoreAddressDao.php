<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\StoreAddressModel;

class StoreAddressDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new StoreAddressModel());
    }

    /**
     * model
     * @return StoreAddressModel
     */
    public function getModel(): StoreAddressModel
    {
        return $this->model;
    }
}
