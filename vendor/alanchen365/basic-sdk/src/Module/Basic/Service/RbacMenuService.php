<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\RbacMenuDao;

class RbacMenuService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new RbacMenuDao());
    }

    /**
     * dao
     * @return RbacMenuDao
     */
    public function getDao(): RbacMenuDao
    {
        return $this->dao;
    }
}
