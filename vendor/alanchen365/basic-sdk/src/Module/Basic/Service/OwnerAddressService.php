<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\OwnerAddressDao;

class OwnerAddressService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new OwnerAddressDao());
    }

    /**
     * dao
     * @return OwnerAddressDao
     */
    public function getDao(): OwnerAddressDao
    {
        return $this->dao;
    }
}
