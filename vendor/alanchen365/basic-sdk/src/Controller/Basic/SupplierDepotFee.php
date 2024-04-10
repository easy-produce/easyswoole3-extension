<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\SupplierDepotFeeService;

class SupplierDepotFee extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return SupplierDepotFeeService
     */
    public function getService(): SupplierDepotFeeService
    {
        return $this->service;
    }
}
