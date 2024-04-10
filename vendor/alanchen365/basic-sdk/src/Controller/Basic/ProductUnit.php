<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\ProductUnitService;

class ProductUnit extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return ProductUnitService
     */
    public function getService(): ProductUnitService
    {
        return $this->service;
    }
}