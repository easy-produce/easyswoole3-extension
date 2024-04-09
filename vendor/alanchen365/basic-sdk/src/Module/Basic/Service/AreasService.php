<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\AreasDao;

class AreasService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new AreasDao());
    }

    /**
     * dao
     * @return AreasDao
     */
    public function getDao(): AreasDao
    {
        return $this->dao;
    }
}
