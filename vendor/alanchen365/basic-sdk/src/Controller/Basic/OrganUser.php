<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\OrganUserService;

class OrganUser extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return OrganUserService
     */
    public function getService(): OrganUserService
    {
        return $this->service;
    }
}