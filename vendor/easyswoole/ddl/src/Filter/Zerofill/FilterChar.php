<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/10/16
 * Time: 14:50
 */

namespace EasySwoole\DDL\Filter\Zerofill;


use EasySwoole\DDL\Blueprint\AbstractInterface\ColumnInterface;
use EasySwoole\DDL\Contracts\FilterInterface;

class FilterChar implements FilterInterface
{
    public static function run(ColumnInterface $column)
    {
        if ($column->getZeroFill()) {
            throw new \InvalidArgumentException('col ' . $column->getColumnName() . ' type char no require zerofill ');
        }
    }

}