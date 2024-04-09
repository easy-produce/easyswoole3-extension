<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\StoreDeliveryRuleDao;

class StoreDeliveryRuleService extends BaseBasicService
{
    function __construct()
    {
        $this->setDao(new StoreDeliveryRuleDao());
    }

    /**
     * dao
     * @return StoreDeliveryRuleDao
     */
    public function getDao(): StoreDeliveryRuleDao
    {
        return $this->dao;
    }
}
