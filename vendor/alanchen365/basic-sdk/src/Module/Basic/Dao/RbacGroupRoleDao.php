<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\RbacGroupRoleModel;

class RbacGroupRoleDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new RbacGroupRoleModel());
    }

    /**
     * model
     * @return RbacGroupRoleModel
     */
    public function getModel(): RbacGroupRoleModel
    {
        return $this->model;
    }
}
