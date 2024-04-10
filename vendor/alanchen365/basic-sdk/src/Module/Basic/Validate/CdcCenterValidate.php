<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class CdcCenterValidate
{
    protected static $alias = [
        'id' => '',
        'code' => '唯一编码',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'name' => '中心名称',
        'sort' => '排序',
        'remark' => '备注',
        'state' => '状态',
        'create_user_name' => '创建人用户名',
        'create_user_code' => '创建人code',
        'create_time' => '创建时间',
        'update_time' => '最后更新时间',
        'delete_flg' => '是否删除',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', CdcCenterValidate::$alias['id']);
        // $validate->addColumn('code', CdcCenterValidate::$alias['code']);
        // $validate->addColumn('app_code', CdcCenterValidate::$alias['app_code']);
        // $validate->addColumn('name', CdcCenterValidate::$alias['name']);
        // $validate->addColumn('sort', CdcCenterValidate::$alias['sort']);
        // $validate->addColumn('remark', CdcCenterValidate::$alias['remark']);
        // $validate->addColumn('state', CdcCenterValidate::$alias['state']);
        // $validate->addColumn('create_user_name', CdcCenterValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', CdcCenterValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', CdcCenterValidate::$alias['create_time']);
        // $validate->addColumn('update_time', CdcCenterValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', CdcCenterValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', CdcCenterValidate::$alias['id']);
        // $validate->addColumn('code', CdcCenterValidate::$alias['code']);
        // $validate->addColumn('app_code', CdcCenterValidate::$alias['app_code']);
        // $validate->addColumn('name', CdcCenterValidate::$alias['name']);
        // $validate->addColumn('sort', CdcCenterValidate::$alias['sort']);
        // $validate->addColumn('remark', CdcCenterValidate::$alias['remark']);
        // $validate->addColumn('state', CdcCenterValidate::$alias['state']);
        // $validate->addColumn('create_user_name', CdcCenterValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', CdcCenterValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', CdcCenterValidate::$alias['create_time']);
        // $validate->addColumn('update_time', CdcCenterValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', CdcCenterValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', CdcCenterValidate::$alias['id']);
        // $validate->addColumn('code', CdcCenterValidate::$alias['code']);
        // $validate->addColumn('app_code', CdcCenterValidate::$alias['app_code']);
        // $validate->addColumn('name', CdcCenterValidate::$alias['name']);
        // $validate->addColumn('sort', CdcCenterValidate::$alias['sort']);
        // $validate->addColumn('remark', CdcCenterValidate::$alias['remark']);
        // $validate->addColumn('state', CdcCenterValidate::$alias['state']);
        // $validate->addColumn('create_user_name', CdcCenterValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', CdcCenterValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', CdcCenterValidate::$alias['create_time']);
        // $validate->addColumn('update_time', CdcCenterValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', CdcCenterValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', CdcCenterValidate::$alias['id']);
        // $validate->addColumn('code', CdcCenterValidate::$alias['code']);
        // $validate->addColumn('app_code', CdcCenterValidate::$alias['app_code']);
        // $validate->addColumn('name', CdcCenterValidate::$alias['name']);
        // $validate->addColumn('sort', CdcCenterValidate::$alias['sort']);
        // $validate->addColumn('remark', CdcCenterValidate::$alias['remark']);
        // $validate->addColumn('state', CdcCenterValidate::$alias['state']);
        // $validate->addColumn('create_user_name', CdcCenterValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', CdcCenterValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', CdcCenterValidate::$alias['create_time']);
        // $validate->addColumn('update_time', CdcCenterValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', CdcCenterValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', CdcCenterValidate::$alias['id']);
        // $validate->addColumn('code', CdcCenterValidate::$alias['code']);
        // $validate->addColumn('app_code', CdcCenterValidate::$alias['app_code']);
        // $validate->addColumn('name', CdcCenterValidate::$alias['name']);
        // $validate->addColumn('sort', CdcCenterValidate::$alias['sort']);
        // $validate->addColumn('remark', CdcCenterValidate::$alias['remark']);
        // $validate->addColumn('state', CdcCenterValidate::$alias['state']);
        // $validate->addColumn('create_user_name', CdcCenterValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', CdcCenterValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', CdcCenterValidate::$alias['create_time']);
        // $validate->addColumn('update_time', CdcCenterValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', CdcCenterValidate::$alias['delete_flg']);
        
        return $validate;
    }
}
