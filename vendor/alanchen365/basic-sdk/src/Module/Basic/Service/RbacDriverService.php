<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\RbacDriverDao;

class RbacDriverService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new RbacDriverDao());
    }

    /**
     * dao
     * @return RbacDriverDao
     */
    public function getDao(): RbacDriverDao
    {
        return $this->dao;
    }
}
