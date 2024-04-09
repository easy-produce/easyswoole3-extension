<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\RbacRoleMenuModel;

class RbacRoleMenuDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new RbacRoleMenuModel());
    }

    /**
     * model
     * @return RbacRoleMenuModel
     */
    public function getModel(): RbacRoleMenuModel
    {
        return $this->model;
    }
}
