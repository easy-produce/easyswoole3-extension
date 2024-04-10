<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\RbacRoleMenuDao;

class RbacRoleMenuService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new RbacRoleMenuDao());
    }

    /**
     * dao
     * @return RbacRoleMenuDao
     */
    public function getDao(): RbacRoleMenuDao
    {
        return $this->dao;
    }
}
