<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\RbacRoleModel;

class RbacRoleDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new RbacRoleModel());
    }

    /**
     * model
     * @return RbacRoleModel
     */
    public function getModel(): RbacRoleModel
    {
        return $this->model;
    }
}
