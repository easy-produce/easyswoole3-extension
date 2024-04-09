<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\PayDepotFeeModel;

class PayDepotFeeDao extends BaseBasicDao
{
    public function __construct()
    {
        $this->setModel(new PayDepotFeeModel());
    }

    /**
     * model
     * @return PayDepotFeeModel
     */
    public function getModel(): PayDepotFeeModel
    {
        return $this->model;
    }
}
