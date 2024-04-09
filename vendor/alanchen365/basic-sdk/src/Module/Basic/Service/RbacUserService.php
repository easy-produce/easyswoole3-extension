<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\RbacUserDao;

class RbacUserService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new RbacUserDao());
    }

    /**
     * dao
     * @return RbacUserDao
     */
    public function getDao(): RbacUserDao
    {
        return $this->dao;
    }
}
