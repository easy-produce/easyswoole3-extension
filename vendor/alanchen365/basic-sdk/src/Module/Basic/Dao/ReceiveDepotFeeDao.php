<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\ReceiveDepotFeeModel;

class ReceiveDepotFeeDao extends BaseBasicDao
{
    public function __construct()
    {
        $this->setModel(new ReceiveDepotFeeModel());
    }

    /**
     * model
     * @return ReceiveDepotFeeModel
     */
    public function getModel(): ReceiveDepotFeeModel
    {
        return $this->model;
    }
}
