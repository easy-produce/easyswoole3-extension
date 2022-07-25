<?php

namespace Es3\Utility;

use Es3\Constant\OrderConst;
use Es3\Exception\InfoException;

class Controller
{
    /**
     * 获取排序规则
     * @param array $params 原始参数
     * @return array
     * @throws InfoException
     */
    public static function getOrderBy(array $params): array
    {
        /** 如果传递了任意一个开始校验合法性 兼容老代码 */
        if (empty($params[OrderConst::KEY_ORDER_COLUMN]) && empty($params[OrderConst::KEY_ORDER_RULE])) {
            return [];
        }

        /** 如果传递了 排序规则是否为 asc或者desc */
        $orderColumn = $params[OrderConst::KEY_ORDER_COLUMN];
        $orderRule = $params[OrderConst::KEY_ORDER_RULE] ?? 'desc';

        /** order rule的值是否合法 */
        if (!in_array(strtolower($orderRule), OrderConst::VAL_ORDER_RULE)) {
            throw new InfoException(1065, "{$orderColumn}的排序规则仅允许为asc或desc");
        }

        return [$orderColumn => $orderRule];
    }

    /**
     * 获取分组参数
     * @param array $params
     * @param array $whiteList
     */
    public static function getGroupBy(string $column, array $whiteList): array
    {
        if (!in_array($column, $whiteList)) {
            throw new InfoException(1032, "字段{$column}不允许分组");
        }

        return [$column];
    }
}