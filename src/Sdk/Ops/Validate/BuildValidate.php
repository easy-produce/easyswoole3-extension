<?php

namespace App\Module\Ops\Validate;

use EasySwoole\Validate\Validate;
use Es3\Constant\EsConst;
use Es3\Exception\InfoException;

/**
 * @author z
 * @description 【运维-构建验证器】
 */
class BuildValidate
{
    protected static $alias = [
        'id' => 'id',
        'server_ip' => '服务器IP',
        'server_type' => '服务器类型',
        'server_temp_name' => '',
        'start_time' => '项目启动时间',
        'remark' => '备注',
        'update_time' => '最后更新时间',
        'create_time' => '创建时间',
        'delete_flg' => '逻辑删除',
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', BuildValidate::$alias['id']);
        // $validate->addColumn('server_ip', BuildValidate::$alias['server_ip']);
        // $validate->addColumn('server_type', BuildValidate::$alias['server_type']);
        // $validate->addColumn('server_temp_name', BuildValidate::$alias['server_temp_name']);
        // $validate->addColumn('start_time', BuildValidate::$alias['start_time']);
        // $validate->addColumn('remark', BuildValidate::$alias['remark']);
        // $validate->addColumn('update_time', BuildValidate::$alias['update_time']);
        // $validate->addColumn('create_time', BuildValidate::$alias['create_time']);
        // $validate->addColumn('delete_flg', BuildValidate::$alias['delete_flg']);

        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', BuildValidate::$alias['id']);
        // $validate->addColumn('server_ip', BuildValidate::$alias['server_ip']);
        // $validate->addColumn('server_type', BuildValidate::$alias['server_type']);
        // $validate->addColumn('server_temp_name', BuildValidate::$alias['server_temp_name']);
        // $validate->addColumn('start_time', BuildValidate::$alias['start_time']);
        // $validate->addColumn('remark', BuildValidate::$alias['remark']);
        // $validate->addColumn('update_time', BuildValidate::$alias['update_time']);
        // $validate->addColumn('create_time', BuildValidate::$alias['create_time']);
        // $validate->addColumn('delete_flg', BuildValidate::$alias['delete_flg']);

        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', BuildValidate::$alias['id']);
        // $validate->addColumn('server_ip', BuildValidate::$alias['server_ip']);
        // $validate->addColumn('server_type', BuildValidate::$alias['server_type']);
        // $validate->addColumn('server_temp_name', BuildValidate::$alias['server_temp_name']);
        // $validate->addColumn('start_time', BuildValidate::$alias['start_time']);
        // $validate->addColumn('remark', BuildValidate::$alias['remark']);
        // $validate->addColumn('update_time', BuildValidate::$alias['update_time']);
        // $validate->addColumn('create_time', BuildValidate::$alias['create_time']);
        // $validate->addColumn('delete_flg', BuildValidate::$alias['delete_flg']);

        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        $validate->addColumn('id', BuildValidate::$alias['id'])->required()->notEmpty();
        // $validate->addColumn('server_ip', BuildValidate::$alias['server_ip']);
        // $validate->addColumn('server_type', BuildValidate::$alias['server_type']);
        // $validate->addColumn('server_temp_name', BuildValidate::$alias['server_temp_name']);
        // $validate->addColumn('start_time', BuildValidate::$alias['start_time']);
        // $validate->addColumn('remark', BuildValidate::$alias['remark']);
        // $validate->addColumn('update_time', BuildValidate::$alias['update_time']);
        // $validate->addColumn('create_time', BuildValidate::$alias['create_time']);
        // $validate->addColumn('delete_flg', BuildValidate::$alias['delete_flg']);

        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        $validate->addColumn('id', BuildValidate::$alias['id'])->required()->notEmpty();
        // $validate->addColumn('server_ip', BuildValidate::$alias['server_ip']);
        // $validate->addColumn('server_type', BuildValidate::$alias['server_type']);
        // $validate->addColumn('server_temp_name', BuildValidate::$alias['server_temp_name']);
        // $validate->addColumn('start_time', BuildValidate::$alias['start_time']);
        // $validate->addColumn('remark', BuildValidate::$alias['remark']);
        // $validate->addColumn('update_time', BuildValidate::$alias['update_time']);
        // $validate->addColumn('create_time', BuildValidate::$alias['create_time']);
        // $validate->addColumn('delete_flg', BuildValidate::$alias['delete_flg']);
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
     * 验证是否允许访问构建选项列表
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
