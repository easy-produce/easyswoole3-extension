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

    public static function insertAll(string $tableName, array $data)
    {
//        if (superEmpty($data)) {
//            throw new ErrorException(34111, "批量插入时缺少数据");
//        }
//
//        // 初始化SQL语句
//        $sql = "INSERT INTO `$tableName` ";
//
//        // 获取数组中的第一个元素来获取列名
//        $firstItemKeys = array_keys($data[0]);
//        $columns = implode('`, `', $firstItemKeys);
//        $sql .= "(`$columns`) VALUES ";
//
//        // 构造值的部分
//        foreach ($data as $row) {
//            $values = array_map(function ($value) {
//                // 对值进行适当的转义，这里使用最基础的转义方法，生产环境中建议使用预处理语句
//                return "'" . $value . "'";
//            }, array_values($row));
//            $sql .= "(" . implode(', ', $values) . "),";
//        }
//
//        // 去掉最后一个逗号
//        $sql = rtrim($sql, ',') . ";";
//        return $sql;
        if (superEmpty($data)) {
            throw new ErrorException(34111, "批量插入时缺少数据");
        }

        // 初始化SQL语句和参数数组
        $sql = "INSERT INTO `$tableName` ";
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

        // 注意：实际执行SQL和参数的方法（如PDO的prepare和execute）需要在调用此方法的上下文中实现
        // 示例伪代码：$pdo->prepare($sql)->execute($params);

        // 此函数现在仅返回SQL和参数，实际执行需在外部完成
        return [ResultConst::DB_QUERY => $sql, ResultConst::DB_BIND => $params];
    }
}