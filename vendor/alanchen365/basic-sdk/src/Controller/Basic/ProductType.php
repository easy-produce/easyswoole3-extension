<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\ProductTypeService;

class ProductType extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return ProductTypeService
     */
    public function getService(): ProductTypeService
    {
        return $this->service;
    }
}