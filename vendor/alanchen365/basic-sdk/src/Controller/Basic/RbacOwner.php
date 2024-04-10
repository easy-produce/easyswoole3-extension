<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\RbacOwnerService;

class RbacOwner extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return RbacOwnerService
     */
    public function getService(): RbacOwnerService
    {
        return $this->service;
    }
}