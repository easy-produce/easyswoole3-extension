<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\ExpressDao;

class ExpressService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new ExpressDao());
    }

    /**
     * dao
     * @return ExpressDao
     */
    public function getDao(): ExpressDao
    {
        return $this->dao;
    }
}
