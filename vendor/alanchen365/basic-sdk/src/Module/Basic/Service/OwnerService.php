<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\OwnerDao;

class OwnerService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new OwnerDao());
    }

    /**
     * dao
     * @return OwnerDao
     */
    public function getDao(): OwnerDao
    {
        return $this->dao;
    }
}
