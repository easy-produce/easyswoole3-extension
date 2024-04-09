<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\OwnerDepotModel;

class OwnerDepotDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new OwnerDepotModel());
    }

    /**
     * model
     * @return OwnerDepotModel
     */
    public function getModel(): OwnerDepotModel
    {
        return $this->model;
    }
}
