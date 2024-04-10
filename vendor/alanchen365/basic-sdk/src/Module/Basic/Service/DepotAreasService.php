<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\DepotAreasDao;

class DepotAreasService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new DepotAreasDao());
    }

    /**
     * dao
     * @return DepotAreasDao
     */
    public function getDao(): DepotAreasDao
    {
        return $this->dao;
    }
}
