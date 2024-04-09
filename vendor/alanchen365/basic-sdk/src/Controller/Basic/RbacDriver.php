<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\RbacDriverService;

class RbacDriver extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return RbacDriverService
     */
    public function getService(): RbacDriverService
    {
        return $this->service;
    }
}