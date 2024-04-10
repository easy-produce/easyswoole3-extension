<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\CarModelService;

class CarModel extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return CarModelService
     */
    public function getService(): CarModelService
    {
        return $this->service;
    }
}