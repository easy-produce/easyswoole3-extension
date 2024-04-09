<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\RbacOwnerDao;

class RbacOwnerService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new RbacOwnerDao());
    }

    /**
     * dao
     * @return RbacOwnerDao
     */
    public function getDao(): RbacOwnerDao
    {
        return $this->dao;
    }
}
