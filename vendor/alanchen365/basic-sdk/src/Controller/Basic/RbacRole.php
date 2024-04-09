<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\RbacRoleService;

class RbacRole extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return RbacRoleService
     */
    public function getService(): RbacRoleService
    {
        return $this->service;
    }
}