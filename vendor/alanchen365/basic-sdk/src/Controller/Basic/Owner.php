<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\OwnerService;

class Owner extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return OwnerService
     */
    public function getService(): OwnerService
    {
        return $this->service;
    }
}