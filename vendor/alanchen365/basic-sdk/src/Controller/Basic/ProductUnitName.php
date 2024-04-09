<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\ProductUnitNameService;

class ProductUnitName extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return ProductUnitNameService
     */
    public function getService(): ProductUnitNameService
    {
        return $this->service;
    }
}