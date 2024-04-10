<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\OrganService;

class Organ extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return OrganService
     */
    public function getService(): OrganService
    {
        return $this->service;
    }
}