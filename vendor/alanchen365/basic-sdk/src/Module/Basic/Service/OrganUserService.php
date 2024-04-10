<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\OrganUserDao;

class OrganUserService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new OrganUserDao());
    }

    /**
     * dao
     * @return OrganUserDao
     */
    public function getDao(): OrganUserDao
    {
        return $this->dao;
    }
}
