<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\RbacGroupService;

class RbacGroup extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return RbacGroupService
     */
    public function getService(): RbacGroupService
    {
        return $this->service;
    }
}