<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\RbacMenuService;

class RbacMenu extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return RbacMenuService
     */
    public function getService(): RbacMenuService
    {
        return $this->service;
    }
}