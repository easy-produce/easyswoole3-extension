<?php

namespace Es3\Utility;

use EasySwoole\ORM\AbstractModel;

class Model
{
    /**
     * 数据列是否存在
     * @param AbstractModel $model 对应的模型
     * @param string $column 对应的字段
     * @return bool
     * @throws \EasySwoole\ORM\Exception\Exception
     */
    public static function columnIsExist(AbstractModel $model, string $column): bool
    {
        $columnList = array_keys($model->schemaInfo()->getColumns());
        return in_array($column, $columnList) ? true : false;
    }
}