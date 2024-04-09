<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\RbacGroupModel;

class RbacGroupDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new RbacGroupModel());
    }

    /**
     * model
     * @return RbacGroupModel
     */
    public function getModel(): RbacGroupModel
    {
        return $this->model;
    }
}
