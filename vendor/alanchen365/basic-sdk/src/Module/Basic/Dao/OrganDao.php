<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\OrganModel;

class OrganDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new OrganModel());
    }

    /**
     * model
     * @return OrganModel
     */
    public function getModel(): OrganModel
    {
        return $this->model;
    }
}
