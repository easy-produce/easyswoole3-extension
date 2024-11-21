<?php

namespace App\Module\Ops\Validate;

use EasySwoole\Validate\Validate;
use Es3\Constant\EsConst;
use Es3\Exception\InfoException;

/**
 * @author z
 * @description 【运维-进程验证器】
 */
class ProcessValidate
{
    protected static $alias = [
        'id' => 'id',
        'build_id' => '构建Id',
        'pid' => '进程ID',
        'name' => '进程名称',
        'status' => '进程状态 ',
        'type' => '进程类型 ',
        'ping_time' => '最后心跳时间',
        'pong_time' => '最后响应时间',
        'start_time' => '进程启动时间',
        'memory_usage' => '当前内存使用情况',
        'memory_peak_usage' => '最大内存使用情况',
        'remark' => '备注',
        'update_time' => '最后更新时间',
        'create_time' => '创建时间',
        'delete_flg' => '逻辑删除',
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProcessValidate::$alias['id']);
        // $validate->addColumn('build_id', ProcessValidate::$alias['build_id']);
        // $validate->addColumn('pid', ProcessValidate::$alias['pid']);
        // $validate->addColumn('name', ProcessValidate::$alias['name']);
        // $validate->addColumn('status', ProcessValidate::$alias['status']);
        // $validate->addColumn('type', ProcessValidate::$alias['type']);
        // $validate->addColumn('ping_time', ProcessValidate::$alias['ping_time']);
        // $validate->addColumn('pong_time', ProcessValidate::$alias['pong_time']);
        // $validate->addColumn('start_time', ProcessValidate::$alias['start_time']);
        // $validate->addColumn('memory_usage', ProcessValidate::$alias['memory_usage']);
        // $validate->addColumn('memory_peak_usage', ProcessValidate::$alias['memory_peak_usage']);
        // $validate->addColumn('remark', ProcessValidate::$alias['remark']);
        // $validate->addColumn('update_time', ProcessValidate::$alias['update_time']);
        // $validate->addColumn('create_time', ProcessValidate::$alias['create_time']);
        // $validate->addColumn('delete_flg', ProcessValidate::$alias['delete_flg']);

        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProcessValidate::$alias['id']);
        // $validate->addColumn('build_id', ProcessValidate::$alias['build_id']);
        // $validate->addColumn('pid', ProcessValidate::$alias['pid']);
        // $validate->addColumn('name', ProcessValidate::$alias['name']);
        // $validate->addColumn('status', ProcessValidate::$alias['status']);
        // $validate->addColumn('type', ProcessValidate::$alias['type']);
        // $validate->addColumn('ping_time', ProcessValidate::$alias['ping_time']);
        // $validate->addColumn('pong_time', ProcessValidate::$alias['pong_time']);
        // $validate->addColumn('start_time', ProcessValidate::$alias['start_time']);
        // $validate->addColumn('memory_usage', ProcessValidate::$alias['memory_usage']);
        // $validate->addColumn('memory_peak_usage', ProcessValidate::$alias['memory_peak_usage']);
        // $validate->addColumn('remark', ProcessValidate::$alias['remark']);
        // $validate->addColumn('update_time', ProcessValidate::$alias['update_time']);
        // $validate->addColumn('create_time', ProcessValidate::$alias['create_time']);
        // $validate->addColumn('delete_flg', ProcessValidate::$alias['delete_flg']);

        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProcessValidate::$alias['id']);
        // $validate->addColumn('build_id', ProcessValidate::$alias['build_id']);
        // $validate->addColumn('pid', ProcessValidate::$alias['pid']);
        // $validate->addColumn('name', ProcessValidate::$alias['name']);
        // $validate->addColumn('status', ProcessValidate::$alias['status']);
        // $validate->addColumn('type', ProcessValidate::$alias['type']);
        // $validate->addColumn('ping_time', ProcessValidate::$alias['ping_time']);
        // $validate->addColumn('pong_time', ProcessValidate::$alias['pong_time']);
        // $validate->addColumn('start_time', ProcessValidate::$alias['start_time']);
        // $validate->addColumn('memory_usage', ProcessValidate::$alias['memory_usage']);
        // $validate->addColumn('memory_peak_usage', ProcessValidate::$alias['memory_peak_usage']);
        // $validate->addColumn('remark', ProcessValidate::$alias['remark']);
        // $validate->addColumn('update_time', ProcessValidate::$alias['update_time']);
        // $validate->addColumn('create_time', ProcessValidate::$alias['create_time']);
        // $validate->addColumn('delete_flg', ProcessValidate::$alias['delete_flg']);

        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        $validate->addColumn('id', ProcessValidate::$alias['id'])->required()->notEmpty();
        // $validate->addColumn('build_id', ProcessValidate::$alias['build_id']);
        // $validate->addColumn('pid', ProcessValidate::$alias['pid']);
        // $validate->addColumn('name', ProcessValidate::$alias['name']);
        // $validate->addColumn('status', ProcessValidate::$alias['status']);
        // $validate->addColumn('type', ProcessValidate::$alias['type']);
        // $validate->addColumn('ping_time', ProcessValidate::$alias['ping_time']);
        // $validate->addColumn('pong_time', ProcessValidate::$alias['pong_time']);
        // $validate->addColumn('start_time', ProcessValidate::$alias['start_time']);
        // $validate->addColumn('memory_usage', ProcessValidate::$alias['memory_usage']);
        // $validate->addColumn('memory_peak_usage', ProcessValidate::$alias['memory_peak_usage']);
        // $validate->addColumn('remark', ProcessValidate::$alias['remark']);
        // $validate->addColumn('update_time', ProcessValidate::$alias['update_time']);
        // $validate->addColumn('create_time', ProcessValidate::$alias['create_time']);
        // $validate->addColumn('delete_flg', ProcessValidate::$alias['delete_flg']);

        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        $validate->addColumn('id', ProcessValidate::$alias['id'])->required()->notEmpty();
        // $validate->addColumn('build_id', ProcessValidate::$alias['build_id']);
        // $validate->addColumn('pid', ProcessValidate::$alias['pid']);
        // $validate->addColumn('name', ProcessValidate::$alias['name']);
        // $validate->addColumn('status', ProcessValidate::$alias['status']);
        // $validate->addColumn('type', ProcessValidate::$alias['type']);
        // $validate->addColumn('ping_time', ProcessValidate::$alias['ping_time']);
        // $validate->addColumn('pong_time', ProcessValidate::$alias['pong_time']);
        // $validate->addColumn('start_time', ProcessValidate::$alias['start_time']);
        // $validate->addColumn('memory_usage', ProcessValidate::$alias['memory_usage']);
        // $validate->addColumn('memory_peak_usage', ProcessValidate::$alias['memory_peak_usage']);
        // $validate->addColumn('remark', ProcessValidate::$alias['remark']);
        // $validate->addColumn('update_time', ProcessValidate::$alias['update_time']);
        // $validate->addColumn('create_time', ProcessValidate::$alias['create_time']);
        // $validate->addColumn('delete_flg', ProcessValidate::$alias['delete_flg']);
        return $validate;
    }

    public function batch(array $params): ?Validate
    {
        $validate = new Validate();

        $validate->addColumn('ids')->required()->notEmpty()->isArray();

        return $validate;
    }

    public function switch(array $params): ?Validate
    {
        $validate = new Validate();
        $validate->addColumn('ids')->required()->notEmpty()->isArray();
        $validate->addColumn(EsConst::ES_KEY_COLUMN)->required()->notEmpty();
        $validate->addColumn(EsConst::ES_KEY_VALUE)->required()->notEmpty();

        // 对某个字段切换状态
        //$column = $params[EsConst::ES_KEY_COLUMN];
        //if (!in_array($column, [])) {
            //throw new InfoException(1236, "字段{$column}不允许切换状态");
        //}

        //$value = $params[EsConst::ES_KEY_VALUE];
        //if (!in_array($value, [1, 0])) {
            //throw new InfoException(1236, "字段{$column}不允许设置为{$value}");
        //}
        return $validate;
    }

    /**
     * 验证是否允许访问进程选项列表
     * @param array $param
     * @return \EasySwoole\Validate\Validate
     */
    public function option(array $param): Validate
    {
        // 对某个字段切换状态
        $column = $param['column'];
        $msg = "字段{$column}不允许访问选项列表";

        $inOption = [
            'name'
        ];

        $validate = new Validate();
        $validate->addColumn('column')->required()->notEmpty()->inArray($inOption, false, $msg);
        $validate->addColumn('value')->required()->notEmpty();
        return $validate;
    }
}
