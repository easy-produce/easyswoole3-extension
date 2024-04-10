<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\ExpressModel;

class ExpressDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new ExpressModel());
    }

    /**
     * model
     * @return ExpressModel
     */
    public function getModel(): ExpressModel
    {
        return $this->model;
    }
}
