<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\DepotRuleService;

class DepotRule extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return DepotRuleService
     */
    public function getService(): DepotRuleService
    {
        return $this->service;
    }
}