<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\AreasModel;

class AreasDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new AreasModel());
    }

    /**
     * model
     * @return AreasModel
     */
    public function getModel(): AreasModel
    {
        return $this->model;
    }
}
