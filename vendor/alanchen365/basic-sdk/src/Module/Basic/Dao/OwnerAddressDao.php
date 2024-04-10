<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\OwnerAddressModel;

class OwnerAddressDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new OwnerAddressModel());
    }

    /**
     * model
     * @return OwnerAddressModel
     */
    public function getModel(): OwnerAddressModel
    {
        return $this->model;
    }
}
