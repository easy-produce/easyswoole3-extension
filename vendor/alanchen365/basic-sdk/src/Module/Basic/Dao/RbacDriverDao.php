<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\RbacDriverModel;

class RbacDriverDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new RbacDriverModel());
    }

    /**
     * model
     * @return RbacDriverModel
     */
    public function getModel(): RbacDriverModel
    {
        return $this->model;
    }
}
