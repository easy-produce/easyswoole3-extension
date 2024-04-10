<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\RbacUserDepotDao;

class RbacUserDepotService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new RbacUserDepotDao());
    }

    /**
     * dao
     * @return RbacUserDepotDao
     */
    public function getDao(): RbacUserDepotDao
    {
        return $this->dao;
    }
}
