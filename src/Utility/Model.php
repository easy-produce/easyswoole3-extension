<?php

namespace Es3\Utility;

use App\Constant\AppConst;
use EasySwoole\ORM\AbstractModel;
use Es3\Constant\ResultConst;
use Es3\Exception\ErrorException;
use Es3\Output\Result;

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

    // $data,$tableName, $column, $ignoreError
    public static function insertAll(array $data, ?string $column = '', ?string $tableName = '', ?bool $ignoreError = false): array
    {
        if (superEmpty($data)) {
            throw new ErrorException(34111, "批量插入时缺少数据");
        }

        // 初始化SQL语句和参数数组
        if($ignoreError){
            $sql = "INSERT IGNORE INTO `$tableName` ";
        }else{
            $sql = "INSERT INTO `$tableName` ";
        }

        $params = [];
        $firstItemKeys = array_keys($data[0]);
        $columns = implode('`, `', $firstItemKeys);
        $sql .= "(`$columns`) VALUES ";

        // 构造值的部分并收集参数
        foreach ($data as $row) {
            $placeholders = array_fill(0, count($row), '?');
            $sql .= "(" . implode(', ', $placeholders) . "),";
            $params = array_merge($params, array_values($row));
        }

        // 去掉最后一个逗号，准备执行
        $sql = rtrim($sql, ',') . ";";


        // 此函数现在仅返回SQL和参数，实际执行需在外部完成
        return [ResultConst::DB_QUERY => $sql, ResultConst::DB_BIND => $params];
    }
}