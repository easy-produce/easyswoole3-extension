<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\RbacUserDepotModel;

class RbacUserDepotDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new RbacUserDepotModel());
    }

    /**
     * model
     * @return RbacUserDepotModel
     */
    public function getModel(): RbacUserDepotModel
    {
        return $this->model;
    }
}
