<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\OrganUserModel;

class OrganUserDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new OrganUserModel());
    }

    /**
     * model
     * @return OrganUserModel
     */
    public function getModel(): OrganUserModel
    {
        return $this->model;
    }
}
