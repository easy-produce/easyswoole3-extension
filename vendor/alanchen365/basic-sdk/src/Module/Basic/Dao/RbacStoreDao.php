<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\RbacStoreModel;

class RbacStoreDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new RbacStoreModel());
    }

    /**
     * model
     * @return RbacStoreModel
     */
    public function getModel(): RbacStoreModel
    {
        return $this->model;
    }
}
