<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\RbacStoreDao;

class RbacStoreService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new RbacStoreDao());
    }

    /**
     * dao
     * @return RbacStoreDao
     */
    public function getDao(): RbacStoreDao
    {
        return $this->dao;
    }
}
