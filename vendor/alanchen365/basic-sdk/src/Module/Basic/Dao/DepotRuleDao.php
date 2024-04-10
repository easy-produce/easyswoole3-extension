<?php

namespace App\Module\Basic\Dao;

use App\Module\Basic\Model\DepotRuleModel;

class DepotRuleDao extends BaseBasicDao
{
    function __construct()
    {
        $this->setModel(new DepotRuleModel());
    }

    /**
     * model
     * @return DepotRuleModel
     */
    public function getModel(): DepotRuleModel
    {
        return $this->model;
    }
}
