<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\RbacUserGroupModel;

class RbacUserGroupDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new RbacUserGroupModel());
    }

    /**
     * model
     * @return RbacUserGroupModel
     */
    public function getModel(): RbacUserGroupModel
    {
        return $this->model;
    }
}
