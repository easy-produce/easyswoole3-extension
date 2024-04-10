<?php

namespace App\Module\Basic\Service;

use App\Module\Basic\Dao\BaseBasicDao;
use EasySwoole\EasySwoole\Logger;
use Es3\Base\Service;
use Es3\Exception\InfoException;

class BaseBasicService
{
    use Service;

    /**
     * 新增
     * @param array $params
     */
    public function insertModels(array $params)
    {
        $this->getDao()->insertModels($params);
    }

    /**
     * 修改
     * @param array $params
     */
    public function updateModels(array $params)
    {
        $this->getDao()->updateModels($params);
    }

    /**
     * 删除
     * @param array $ids
     */
    public function deleteModels(array $ids)
    {
        $this->getDao()->deleteModels($ids);
    }

}
