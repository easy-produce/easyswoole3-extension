<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\CdcCenterService;

class CdcCenter extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return CdcCenterService
     */
    public function getService(): CdcCenterService
    {
        return $this->service;
    }
}