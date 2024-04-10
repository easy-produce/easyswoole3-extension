<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\StoreDeliveryRuleService;

class StoreDeliveryRule extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return StoreDeliveryRuleService
     */
    public function getService(): StoreDeliveryRuleService
    {
        return $this->service;
    }
}