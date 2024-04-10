<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\PayDepotFeeDao;

class PayDepotFeeService extends BaseBasicService
{
    public function __construct()
    {
        $this->setDao(new PayDepotFeeDao());
    }

    /**
     * dao
     * @return PayDepotFeeDao
     */
    public function getDao(): PayDepotFeeDao
    {
        return $this->dao;
    }
}
