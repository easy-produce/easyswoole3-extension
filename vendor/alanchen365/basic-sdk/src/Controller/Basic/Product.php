<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\ProductService;

class Product extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return ProductService
     */
    public function getService(): ProductService
    {
        return $this->service;
    }
}