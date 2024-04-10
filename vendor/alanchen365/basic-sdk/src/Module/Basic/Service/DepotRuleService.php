<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\DepotRuleDao;

class DepotRuleService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new DepotRuleDao());
    }

    /**
     * dao
     * @return DepotRuleDao
     */
    public function getDao(): DepotRuleDao
    {
        return $this->dao;
    }
}
