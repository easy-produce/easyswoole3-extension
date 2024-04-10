<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\OwnerModel;

class OwnerDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new OwnerModel());
    }

    /**
     * model
     * @return OwnerModel
     */
    public function getModel(): OwnerModel
    {
        return $this->model;
    }
}
