<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\RbacUserService;

class RbacUser extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return RbacUserService
     */
    public function getService(): RbacUserService
    {
        return $this->service;
    }
}