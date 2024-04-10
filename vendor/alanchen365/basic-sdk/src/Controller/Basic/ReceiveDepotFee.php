<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\ReceiveDepotFeeService;

class ReceiveDepotFee extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return ReceiveDepotFeeService
     */
    public function getService(): ReceiveDepotFeeService
    {
        return $this->service;
    }
}
