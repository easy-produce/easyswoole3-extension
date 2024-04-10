<?php
namespace App\Controller\Basic;

use App\Module\Basic\Service\CarService;

class Car extends BaseBasic
{
    
    
    /**
     * 获取service
     * @return CarService
     */
    public function getService(): CarService
    {
        return $this->service;
    }
}