<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\ProductToTypeService;

class ProductToType extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return ProductToTypeService
     */
    public function getService(): ProductToTypeService
    {
        return $this->service;
    }
}