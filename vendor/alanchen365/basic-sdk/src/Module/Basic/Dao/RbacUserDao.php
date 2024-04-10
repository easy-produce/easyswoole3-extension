<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\RbacUserModel;

class RbacUserDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new RbacUserModel());
    }

    /**
     * model
     * @return RbacUserModel
     */
    public function getModel(): RbacUserModel
    {
        return $this->model;
    }
}
