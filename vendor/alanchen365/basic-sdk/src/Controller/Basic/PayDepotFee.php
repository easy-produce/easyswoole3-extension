<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\PayDepotFeeService;

class PayDepotFee extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return PayDepotFeeService
     */
    public function getService(): PayDepotFeeService
    {
        return $this->service;
    }
}
