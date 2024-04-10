<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\ExpressStoreService;

class ExpressStore extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return ExpressStoreService
     */
    public function getService(): ExpressStoreService
    {
        return $this->service;
    }
}