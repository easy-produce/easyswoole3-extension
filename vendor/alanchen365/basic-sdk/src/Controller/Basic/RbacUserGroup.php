<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\RbacUserGroupService;

class RbacUserGroup extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return RbacUserGroupService
     */
    public function getService(): RbacUserGroupService
    {
        return $this->service;
    }
}