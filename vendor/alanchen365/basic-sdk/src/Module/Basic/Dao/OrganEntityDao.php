<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\OrganEntityModel;

class OrganEntityDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new OrganEntityModel());
    }

    /**
     * model
     * @return OrganEntityModel
     */
    public function getModel(): OrganEntityModel
    {
        return $this->model;
    }
}
