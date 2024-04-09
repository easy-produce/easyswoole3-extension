<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\ReceiveDepotFeeDao;

class ReceiveDepotFeeService extends BaseBasicService
{
    public function __construct()
    {
        $this->setDao(new ReceiveDepotFeeDao());
    }

    /**
     * dao
     * @return ReceiveDepotFeeDao
     */
    public function getDao(): ReceiveDepotFeeDao
    {
        return $this->dao;
    }
}
