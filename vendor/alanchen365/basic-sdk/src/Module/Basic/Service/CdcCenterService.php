<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\CdcCenterDao;

class CdcCenterService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new CdcCenterDao());
    }

    /**
     * dao
     * @return CdcCenterDao
     */
    public function getDao(): CdcCenterDao
    {
        return $this->dao;
    }
}
