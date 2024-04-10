<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\RbacMenuModel;

class RbacMenuDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new RbacMenuModel());
    }

    /**
     * model
     * @return RbacMenuModel
     */
    public function getModel(): RbacMenuModel
    {
        return $this->model;
    }
}
