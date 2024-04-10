<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\RbacGroupRoleService;

class RbacGroupRole extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return RbacGroupRoleService
     */
    public function getService(): RbacGroupRoleService
    {
        return $this->service;
    }
}