<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\CarModelDao;

class CarModelService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new CarModelDao());
    }

    /**
     * dao
     * @return CarModelDao
     */
    public function getDao(): CarModelDao
    {
        return $this->dao;
    }
}
