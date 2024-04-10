<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\CarDao;

class CarService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new CarDao());
    }

    /**
     * dao
     * @return CarDao
     */
    public function getDao(): CarDao
    {
        return $this->dao;
    }
}
