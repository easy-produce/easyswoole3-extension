<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\RbacGroupDao;

class RbacGroupService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new RbacGroupDao());
    }

    /**
     * dao
     * @return RbacGroupDao
     */
    public function getDao(): RbacGroupDao
    {
        return $this->dao;
    }
}
