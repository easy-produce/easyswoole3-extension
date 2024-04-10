<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\RbacUserGroupDao;

class RbacUserGroupService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new RbacUserGroupDao());
    }

    /**
     * dao
     * @return RbacUserGroupDao
     */
    public function getDao(): RbacUserGroupDao
    {
        return $this->dao;
    }
}
