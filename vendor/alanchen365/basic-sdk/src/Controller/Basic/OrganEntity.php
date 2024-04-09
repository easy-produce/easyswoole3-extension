<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\OrganEntityService;

class OrganEntity extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return OrganEntityService
     */
    public function getService(): OrganEntityService
    {
        return $this->service;
    }
}