<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\RbacRoleDao;

class RbacRoleService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new RbacRoleDao());
    }

    /**
     * dao
     * @return RbacRoleDao
     */
    public function getDao(): RbacRoleDao
    {
        return $this->dao;
    }
}
