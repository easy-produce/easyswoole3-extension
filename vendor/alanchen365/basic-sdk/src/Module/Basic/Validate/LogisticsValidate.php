<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class LogisticsValidate
{
    protected static $alias = [
        'id' => '',
        'code' => '唯一编码',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'name' => '物流商名称',
        'short_name' => '物流商简称',
        'contact' => '负责人',
        'mobile' => '负责人电话',
        'pathid' => '行政区域',
        'province' => '行政省份',
        'city' => '行政城市',
        'district' => '行政区域',
        'address' => '详细地址',
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

        // $validate->addColumn('id', LogisticsValidate::$alias['id']);
        // $validate->addColumn('code', LogisticsValidate::$alias['code']);
        // $validate->addColumn('app_code', LogisticsValidate::$alias['app_code']);
        // $validate->addColumn('name', LogisticsValidate::$alias['name']);
        // $validate->addColumn('short_name', LogisticsValidate::$alias['short_name']);
        // $validate->addColumn('contact', LogisticsValidate::$alias['contact']);
        // $validate->addColumn('mobile', LogisticsValidate::$alias['mobile']);
        // $validate->addColumn('pathid', LogisticsValidate::$alias['pathid']);
        // $validate->addColumn('province', LogisticsValidate::$alias['province']);
        // $validate->addColumn('city', LogisticsValidate::$alias['city']);
        // $validate->addColumn('district', LogisticsValidate::$alias['district']);
        // $validate->addColumn('address', LogisticsValidate::$alias['address']);
        // $validate->addColumn('status', LogisticsValidate::$alias['status']);
        // $validate->addColumn('remark', LogisticsValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', LogisticsValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', LogisticsValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', LogisticsValidate::$alias['create_time']);
        // $validate->addColumn('update_time', LogisticsValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', LogisticsValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', LogisticsValidate::$alias['id']);
        // $validate->addColumn('code', LogisticsValidate::$alias['code']);
        // $validate->addColumn('app_code', LogisticsValidate::$alias['app_code']);
        // $validate->addColumn('name', LogisticsValidate::$alias['name']);
        // $validate->addColumn('short_name', LogisticsValidate::$alias['short_name']);
        // $validate->addColumn('contact', LogisticsValidate::$alias['contact']);
        // $validate->addColumn('mobile', LogisticsValidate::$alias['mobile']);
        // $validate->addColumn('pathid', LogisticsValidate::$alias['pathid']);
        // $validate->addColumn('province', LogisticsValidate::$alias['province']);
        // $validate->addColumn('city', LogisticsValidate::$alias['city']);
        // $validate->addColumn('district', LogisticsValidate::$alias['district']);
        // $validate->addColumn('address', LogisticsValidate::$alias['address']);
        // $validate->addColumn('status', LogisticsValidate::$alias['status']);
        // $validate->addColumn('remark', LogisticsValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', LogisticsValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', LogisticsValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', LogisticsValidate::$alias['create_time']);
        // $validate->addColumn('update_time', LogisticsValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', LogisticsValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', LogisticsValidate::$alias['id']);
        // $validate->addColumn('code', LogisticsValidate::$alias['code']);
        // $validate->addColumn('app_code', LogisticsValidate::$alias['app_code']);
        // $validate->addColumn('name', LogisticsValidate::$alias['name']);
        // $validate->addColumn('short_name', LogisticsValidate::$alias['short_name']);
        // $validate->addColumn('contact', LogisticsValidate::$alias['contact']);
        // $validate->addColumn('mobile', LogisticsValidate::$alias['mobile']);
        // $validate->addColumn('pathid', LogisticsValidate::$alias['pathid']);
        // $validate->addColumn('province', LogisticsValidate::$alias['province']);
        // $validate->addColumn('city', LogisticsValidate::$alias['city']);
        // $validate->addColumn('district', LogisticsValidate::$alias['district']);
        // $validate->addColumn('address', LogisticsValidate::$alias['address']);
        // $validate->addColumn('status', LogisticsValidate::$alias['status']);
        // $validate->addColumn('remark', LogisticsValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', LogisticsValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', LogisticsValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', LogisticsValidate::$alias['create_time']);
        // $validate->addColumn('update_time', LogisticsValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', LogisticsValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', LogisticsValidate::$alias['id']);
        // $validate->addColumn('code', LogisticsValidate::$alias['code']);
        // $validate->addColumn('app_code', LogisticsValidate::$alias['app_code']);
        // $validate->addColumn('name', LogisticsValidate::$alias['name']);
        // $validate->addColumn('short_name', LogisticsValidate::$alias['short_name']);
        // $validate->addColumn('contact', LogisticsValidate::$alias['contact']);
        // $validate->addColumn('mobile', LogisticsValidate::$alias['mobile']);
        // $validate->addColumn('pathid', LogisticsValidate::$alias['pathid']);
        // $validate->addColumn('province', LogisticsValidate::$alias['province']);
        // $validate->addColumn('city', LogisticsValidate::$alias['city']);
        // $validate->addColumn('district', LogisticsValidate::$alias['district']);
        // $validate->addColumn('address', LogisticsValidate::$alias['address']);
        // $validate->addColumn('status', LogisticsValidate::$alias['status']);
        // $validate->addColumn('remark', LogisticsValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', LogisticsValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', LogisticsValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', LogisticsValidate::$alias['create_time']);
        // $validate->addColumn('update_time', LogisticsValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', LogisticsValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', LogisticsValidate::$alias['id']);
        // $validate->addColumn('code', LogisticsValidate::$alias['code']);
        // $validate->addColumn('app_code', LogisticsValidate::$alias['app_code']);
        // $validate->addColumn('name', LogisticsValidate::$alias['name']);
        // $validate->addColumn('short_name', LogisticsValidate::$alias['short_name']);
        // $validate->addColumn('contact', LogisticsValidate::$alias['contact']);
        // $validate->addColumn('mobile', LogisticsValidate::$alias['mobile']);
        // $validate->addColumn('pathid', LogisticsValidate::$alias['pathid']);
        // $validate->addColumn('province', LogisticsValidate::$alias['province']);
        // $validate->addColumn('city', LogisticsValidate::$alias['city']);
        // $validate->addColumn('district', LogisticsValidate::$alias['district']);
        // $validate->addColumn('address', LogisticsValidate::$alias['address']);
        // $validate->addColumn('status', LogisticsValidate::$alias['status']);
        // $validate->addColumn('remark', LogisticsValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', LogisticsValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', LogisticsValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', LogisticsValidate::$alias['create_time']);
        // $validate->addColumn('update_time', LogisticsValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', LogisticsValidate::$alias['delete_flg']);
        
        return $validate;
    }
}
