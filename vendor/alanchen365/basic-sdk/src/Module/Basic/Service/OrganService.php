<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\OrganDao;

class OrganService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new OrganDao());
    }

    /**
     * dao
     * @return OrganDao
     */
    public function getDao(): OrganDao
    {
        return $this->dao;
    }
}
