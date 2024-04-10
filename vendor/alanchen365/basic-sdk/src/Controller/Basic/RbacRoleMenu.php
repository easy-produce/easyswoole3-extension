<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\RbacRoleMenuService;

class RbacRoleMenu extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return RbacRoleMenuService
     */
    public function getService(): RbacRoleMenuService
    {
        return $this->service;
    }
}