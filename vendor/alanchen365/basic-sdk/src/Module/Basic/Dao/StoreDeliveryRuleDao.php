<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\StoreDeliveryRuleModel;

class StoreDeliveryRuleDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new StoreDeliveryRuleModel());
    }

    /**
     * model
     * @return StoreDeliveryRuleModel
     */
    public function getModel(): StoreDeliveryRuleModel
    {
        return $this->model;
    }
}
