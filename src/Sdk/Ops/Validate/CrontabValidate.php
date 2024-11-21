<?php

namespace App\Module\Ops\Validate;

use EasySwoole\Validate\Validate;
use Es3\Constant\EsConst;
use Es3\Exception\InfoException;

/**
 * @author z
 * @description 【运维-定时任务验证器】
 */
class CrontabValidate
{
    protected static $alias = [
        'id' => 'id',
        'build_id' => '构建Id',
        'name' => '定时任务名称',
        'ping_time' => '最后心跳时间',
        'start_time' => '进程启动时间',
        'rule' => '定时任务名称',
        'run_times' => '运行次数',
        'next_run_time' => '下一次运行时间',
        'current_run_time' => '当前或上一次运行时间',
        'stop_flg' => '任务是否停止',
        'remark' => '备注',
        'update_time' => '最后更新时间',
        'create_time' => '创建时间',
        'delete_flg' => '逻辑删除',
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', CrontabValidate::$alias['id']);
        // $validate->addColumn('build_id', CrontabValidate::$alias['build_id']);
        // $validate->addColumn('name', CrontabValidate::$alias['name']);
        // $validate->addColumn('ping_time', CrontabValidate::$alias['ping_time']);
        // $validate->addColumn('start_time', CrontabValidate::$alias['start_time']);
        // $validate->addColumn('rule', CrontabValidate::$alias['rule']);
        // $validate->addColumn('run_times', CrontabValidate::$alias['run_times']);
        // $validate->addColumn('next_run_time', CrontabValidate::$alias['next_run_time']);
        // $validate->addColumn('current_run_time', CrontabValidate::$alias['current_run_time']);
        // $validate->addColumn('stop_flg', CrontabValidate::$alias['stop_flg']);
        // $validate->addColumn('remark', CrontabValidate::$alias['remark']);
        // $validate->addColumn('update_time', CrontabValidate::$alias['update_time']);
        // $validate->addColumn('create_time', CrontabValidate::$alias['create_time']);
        // $validate->addColumn('delete_flg', CrontabValidate::$alias['delete_flg']);

        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', CrontabValidate::$alias['id']);
        // $validate->addColumn('build_id', CrontabValidate::$alias['build_id']);
        // $validate->addColumn('name', CrontabValidate::$alias['name']);
        // $validate->addColumn('ping_time', CrontabValidate::$alias['ping_time']);
        // $validate->addColumn('start_time', CrontabValidate::$alias['start_time']);
        // $validate->addColumn('rule', CrontabValidate::$alias['rule']);
        // $validate->addColumn('run_times', CrontabValidate::$alias['run_times']);
        // $validate->addColumn('next_run_time', CrontabValidate::$alias['next_run_time']);
        // $validate->addColumn('current_run_time', CrontabValidate::$alias['current_run_time']);
        // $validate->addColumn('stop_flg', CrontabValidate::$alias['stop_flg']);
        // $validate->addColumn('remark', CrontabValidate::$alias['remark']);
        // $validate->addColumn('update_time', CrontabValidate::$alias['update_time']);
        // $validate->addColumn('create_time', CrontabValidate::$alias['create_time']);
        // $validate->addColumn('delete_flg', CrontabValidate::$alias['delete_flg']);

        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', CrontabValidate::$alias['id']);
        // $validate->addColumn('build_id', CrontabValidate::$alias['build_id']);
        // $validate->addColumn('name', CrontabValidate::$alias['name']);
        // $validate->addColumn('ping_time', CrontabValidate::$alias['ping_time']);
        // $validate->addColumn('start_time', CrontabValidate::$alias['start_time']);
        // $validate->addColumn('rule', CrontabValidate::$alias['rule']);
        // $validate->addColumn('run_times', CrontabValidate::$alias['run_times']);
        // $validate->addColumn('next_run_time', CrontabValidate::$alias['next_run_time']);
        // $validate->addColumn('current_run_time', CrontabValidate::$alias['current_run_time']);
        // $validate->addColumn('stop_flg', CrontabValidate::$alias['stop_flg']);
        // $validate->addColumn('remark', CrontabValidate::$alias['remark']);
        // $validate->addColumn('update_time', CrontabValidate::$alias['update_time']);
        // $validate->addColumn('create_time', CrontabValidate::$alias['create_time']);
        // $validate->addColumn('delete_flg', CrontabValidate::$alias['delete_flg']);

        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        $validate->addColumn('id', CrontabValidate::$alias['id'])->required()->notEmpty();
        // $validate->addColumn('build_id', CrontabValidate::$alias['build_id']);
        // $validate->addColumn('name', CrontabValidate::$alias['name']);
        // $validate->addColumn('ping_time', CrontabValidate::$alias['ping_time']);
        // $validate->addColumn('start_time', CrontabValidate::$alias['start_time']);
        // $validate->addColumn('rule', CrontabValidate::$alias['rule']);
        // $validate->addColumn('run_times', CrontabValidate::$alias['run_times']);
        // $validate->addColumn('next_run_time', CrontabValidate::$alias['next_run_time']);
        // $validate->addColumn('current_run_time', CrontabValidate::$alias['current_run_time']);
        // $validate->addColumn('stop_flg', CrontabValidate::$alias['stop_flg']);
        // $validate->addColumn('remark', CrontabValidate::$alias['remark']);
        // $validate->addColumn('update_time', CrontabValidate::$alias['update_time']);
        // $validate->addColumn('create_time', CrontabValidate::$alias['create_time']);
        // $validate->addColumn('delete_flg', CrontabValidate::$alias['delete_flg']);

        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        $validate->addColumn('id', CrontabValidate::$alias['id'])->required()->notEmpty();
        // $validate->addColumn('build_id', CrontabValidate::$alias['build_id']);
        // $validate->addColumn('name', CrontabValidate::$alias['name']);
        // $validate->addColumn('ping_time', CrontabValidate::$alias['ping_time']);
        // $validate->addColumn('start_time', CrontabValidate::$alias['start_time']);
        // $validate->addColumn('rule', CrontabValidate::$alias['rule']);
        // $validate->addColumn('run_times', CrontabValidate::$alias['run_times']);
        // $validate->addColumn('next_run_time', CrontabValidate::$alias['next_run_time']);
        // $validate->addColumn('current_run_time', CrontabValidate::$alias['current_run_time']);
        // $validate->addColumn('stop_flg', CrontabValidate::$alias['stop_flg']);
        // $validate->addColumn('remark', CrontabValidate::$alias['remark']);
        // $validate->addColumn('update_time', CrontabValidate::$alias['update_time']);
        // $validate->addColumn('create_time', CrontabValidate::$alias['create_time']);
        // $validate->addColumn('delete_flg', CrontabValidate::$alias['delete_flg']);
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
     * 验证是否允许访问定时任务选项列表
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
