<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\OrganEntityDao;

class OrganEntityService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new OrganEntityDao());
    }

    /**
     * dao
     * @return OrganEntityDao
     */
    public function getDao(): OrganEntityDao
    {
        return $this->dao;
    }
}
