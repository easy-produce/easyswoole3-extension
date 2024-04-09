<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\RbacGroupRoleDao;

class RbacGroupRoleService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new RbacGroupRoleDao());
    }

    /**
     * dao
     * @return RbacGroupRoleDao
     */
    public function getDao(): RbacGroupRoleDao
    {
        return $this->dao;
    }
}
