<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\RbacStoreService;

class RbacStore extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return RbacStoreService
     */
    public function getService(): RbacStoreService
    {
        return $this->service;
    }
}