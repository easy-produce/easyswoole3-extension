<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\ExpressStoreModel;

class ExpressStoreDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new ExpressStoreModel());
    }

    /**
     * model
     * @return ExpressStoreModel
     */
    public function getModel(): ExpressStoreModel
    {
        return $this->model;
    }
}
