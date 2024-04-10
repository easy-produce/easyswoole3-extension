<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\CdcCenterModel;

class CdcCenterDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new CdcCenterModel());
    }

    /**
     * model
     * @return CdcCenterModel
     */
    public function getModel(): CdcCenterModel
    {
        return $this->model;
    }
}
