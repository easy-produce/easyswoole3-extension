<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\DepotAreasModel;

class DepotAreasDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new DepotAreasModel());
    }

    /**
     * model
     * @return DepotAreasModel
     */
    public function getModel(): DepotAreasModel
    {
        return $this->model;
    }
}
