<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class DriverValidate
{
    protected static $alias = [
        'id' => '',
        'code' => '唯一编码',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'logistics_code' => '物流商编码',
        'name' => '司机姓名',
        'mobile' => '联系电话',
        'license' => '驾照',
        'id_card_up' => '身份证正面',
        'id_card_down' => '身份证反面',
        'status' => '状态',
        'remark' => '备注',
        'create_user_name' => '创建人用户名',
        'create_user_code' => '创建人code',
        'create_time' => '创建时间',
        'update_time' => '最后更新时间',
        'delete_flg' => '是否删除',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', DriverValidate::$alias['id']);
        // $validate->addColumn('code', DriverValidate::$alias['code']);
        // $validate->addColumn('app_code', DriverValidate::$alias['app_code']);
        // $validate->addColumn('logistics_code', DriverValidate::$alias['logistics_code']);
        // $validate->addColumn('name', DriverValidate::$alias['name']);
        // $validate->addColumn('mobile', DriverValidate::$alias['mobile']);
        // $validate->addColumn('license', DriverValidate::$alias['license']);
        // $validate->addColumn('id_card_up', DriverValidate::$alias['id_card_up']);
        // $validate->addColumn('id_card_down', DriverValidate::$alias['id_card_down']);
        // $validate->addColumn('status', DriverValidate::$alias['status']);
        // $validate->addColumn('remark', DriverValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', DriverValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', DriverValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', DriverValidate::$alias['create_time']);
        // $validate->addColumn('update_time', DriverValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', DriverValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', DriverValidate::$alias['id']);
        // $validate->addColumn('code', DriverValidate::$alias['code']);
        // $validate->addColumn('app_code', DriverValidate::$alias['app_code']);
        // $validate->addColumn('logistics_code', DriverValidate::$alias['logistics_code']);
        // $validate->addColumn('name', DriverValidate::$alias['name']);
        // $validate->addColumn('mobile', DriverValidate::$alias['mobile']);
        // $validate->addColumn('license', DriverValidate::$alias['license']);
        // $validate->addColumn('id_card_up', DriverValidate::$alias['id_card_up']);
        // $validate->addColumn('id_card_down', DriverValidate::$alias['id_card_down']);
        // $validate->addColumn('status', DriverValidate::$alias['status']);
        // $validate->addColumn('remark', DriverValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', DriverValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', DriverValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', DriverValidate::$alias['create_time']);
        // $validate->addColumn('update_time', DriverValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', DriverValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', DriverValidate::$alias['id']);
        // $validate->addColumn('code', DriverValidate::$alias['code']);
        // $validate->addColumn('app_code', DriverValidate::$alias['app_code']);
        // $validate->addColumn('logistics_code', DriverValidate::$alias['logistics_code']);
        // $validate->addColumn('name', DriverValidate::$alias['name']);
        // $validate->addColumn('mobile', DriverValidate::$alias['mobile']);
        // $validate->addColumn('license', DriverValidate::$alias['license']);
        // $validate->addColumn('id_card_up', DriverValidate::$alias['id_card_up']);
        // $validate->addColumn('id_card_down', DriverValidate::$alias['id_card_down']);
        // $validate->addColumn('status', DriverValidate::$alias['status']);
        // $validate->addColumn('remark', DriverValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', DriverValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', DriverValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', DriverValidate::$alias['create_time']);
        // $validate->addColumn('update_time', DriverValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', DriverValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', DriverValidate::$alias['id']);
        // $validate->addColumn('code', DriverValidate::$alias['code']);
        // $validate->addColumn('app_code', DriverValidate::$alias['app_code']);
        // $validate->addColumn('logistics_code', DriverValidate::$alias['logistics_code']);
        // $validate->addColumn('name', DriverValidate::$alias['name']);
        // $validate->addColumn('mobile', DriverValidate::$alias['mobile']);
        // $validate->addColumn('license', DriverValidate::$alias['license']);
        // $validate->addColumn('id_card_up', DriverValidate::$alias['id_card_up']);
        // $validate->addColumn('id_card_down', DriverValidate::$alias['id_card_down']);
        // $validate->addColumn('status', DriverValidate::$alias['status']);
        // $validate->addColumn('remark', DriverValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', DriverValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', DriverValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', DriverValidate::$alias['create_time']);
        // $validate->addColumn('update_time', DriverValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', DriverValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', DriverValidate::$alias['id']);
        // $validate->addColumn('code', DriverValidate::$alias['code']);
        // $validate->addColumn('app_code', DriverValidate::$alias['app_code']);
        // $validate->addColumn('logistics_code', DriverValidate::$alias['logistics_code']);
        // $validate->addColumn('name', DriverValidate::$alias['name']);
        // $validate->addColumn('mobile', DriverValidate::$alias['mobile']);
        // $validate->addColumn('license', DriverValidate::$alias['license']);
        // $validate->addColumn('id_card_up', DriverValidate::$alias['id_card_up']);
        // $validate->addColumn('id_card_down', DriverValidate::$alias['id_card_down']);
        // $validate->addColumn('status', DriverValidate::$alias['status']);
        // $validate->addColumn('remark', DriverValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', DriverValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', DriverValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', DriverValidate::$alias['create_time']);
        // $validate->addColumn('update_time', DriverValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', DriverValidate::$alias['delete_flg']);
        
        return $validate;
    }
}
