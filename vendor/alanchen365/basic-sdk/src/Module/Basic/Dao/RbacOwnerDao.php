<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\RbacOwnerModel;

class RbacOwnerDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new RbacOwnerModel());
    }

    /**
     * model
     * @return RbacOwnerModel
     */
    public function getModel(): RbacOwnerModel
    {
        return $this->model;
    }
}
