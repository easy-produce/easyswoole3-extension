<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\AreasService;

class Areas extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return AreasService
     */
    public function getService(): AreasService
    {
        return $this->service;
    }
}