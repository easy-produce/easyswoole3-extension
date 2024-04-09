<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class RbacStoreValidate
{
    protected static $alias = [
        'id' => '',
        'code' => '唯一编码',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'account' => '帐号',
        'name' => '姓名',
        'mobile' => '手机',
        'password' => '密码',
        'owner_code' => '货主id',
        'store_code' => '门店id',
        'type' => '类别',
        'open_id' => '微信登录唯一标识',
        'is_login' => '是否登陆',
        'last_login_time' => '最后登录时间',
        'create_time' => '创建时间',
        'update_time' => '最后更新时间',
        'delete_flg' => '是否删除',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacStoreValidate::$alias['id']);
        // $validate->addColumn('code', RbacStoreValidate::$alias['code']);
        // $validate->addColumn('app_code', RbacStoreValidate::$alias['app_code']);
        // $validate->addColumn('account', RbacStoreValidate::$alias['account']);
        // $validate->addColumn('name', RbacStoreValidate::$alias['name']);
        // $validate->addColumn('mobile', RbacStoreValidate::$alias['mobile']);
        // $validate->addColumn('password', RbacStoreValidate::$alias['password']);
        // $validate->addColumn('owner_code', RbacStoreValidate::$alias['owner_code']);
        // $validate->addColumn('store_code', RbacStoreValidate::$alias['store_code']);
        // $validate->addColumn('type', RbacStoreValidate::$alias['type']);
        // $validate->addColumn('open_id', RbacStoreValidate::$alias['open_id']);
        // $validate->addColumn('is_login', RbacStoreValidate::$alias['is_login']);
        // $validate->addColumn('last_login_time', RbacStoreValidate::$alias['last_login_time']);
        // $validate->addColumn('create_time', RbacStoreValidate::$alias['create_time']);
        // $validate->addColumn('update_time', RbacStoreValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', RbacStoreValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacStoreValidate::$alias['id']);
        // $validate->addColumn('code', RbacStoreValidate::$alias['code']);
        // $validate->addColumn('app_code', RbacStoreValidate::$alias['app_code']);
        // $validate->addColumn('account', RbacStoreValidate::$alias['account']);
        // $validate->addColumn('name', RbacStoreValidate::$alias['name']);
        // $validate->addColumn('mobile', RbacStoreValidate::$alias['mobile']);
        // $validate->addColumn('password', RbacStoreValidate::$alias['password']);
        // $validate->addColumn('owner_code', RbacStoreValidate::$alias['owner_code']);
        // $validate->addColumn('store_code', RbacStoreValidate::$alias['store_code']);
        // $validate->addColumn('type', RbacStoreValidate::$alias['type']);
        // $validate->addColumn('open_id', RbacStoreValidate::$alias['open_id']);
        // $validate->addColumn('is_login', RbacStoreValidate::$alias['is_login']);
        // $validate->addColumn('last_login_time', RbacStoreValidate::$alias['last_login_time']);
        // $validate->addColumn('create_time', RbacStoreValidate::$alias['create_time']);
        // $validate->addColumn('update_time', RbacStoreValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', RbacStoreValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacStoreValidate::$alias['id']);
        // $validate->addColumn('code', RbacStoreValidate::$alias['code']);
        // $validate->addColumn('app_code', RbacStoreValidate::$alias['app_code']);
        // $validate->addColumn('account', RbacStoreValidate::$alias['account']);
        // $validate->addColumn('name', RbacStoreValidate::$alias['name']);
        // $validate->addColumn('mobile', RbacStoreValidate::$alias['mobile']);
        // $validate->addColumn('password', RbacStoreValidate::$alias['password']);
        // $validate->addColumn('owner_code', RbacStoreValidate::$alias['owner_code']);
        // $validate->addColumn('store_code', RbacStoreValidate::$alias['store_code']);
        // $validate->addColumn('type', RbacStoreValidate::$alias['type']);
        // $validate->addColumn('open_id', RbacStoreValidate::$alias['open_id']);
        // $validate->addColumn('is_login', RbacStoreValidate::$alias['is_login']);
        // $validate->addColumn('last_login_time', RbacStoreValidate::$alias['last_login_time']);
        // $validate->addColumn('create_time', RbacStoreValidate::$alias['create_time']);
        // $validate->addColumn('update_time', RbacStoreValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', RbacStoreValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacStoreValidate::$alias['id']);
        // $validate->addColumn('code', RbacStoreValidate::$alias['code']);
        // $validate->addColumn('app_code', RbacStoreValidate::$alias['app_code']);
        // $validate->addColumn('account', RbacStoreValidate::$alias['account']);
        // $validate->addColumn('name', RbacStoreValidate::$alias['name']);
        // $validate->addColumn('mobile', RbacStoreValidate::$alias['mobile']);
        // $validate->addColumn('password', RbacStoreValidate::$alias['password']);
        // $validate->addColumn('owner_code', RbacStoreValidate::$alias['owner_code']);
        // $validate->addColumn('store_code', RbacStoreValidate::$alias['store_code']);
        // $validate->addColumn('type', RbacStoreValidate::$alias['type']);
        // $validate->addColumn('open_id', RbacStoreValidate::$alias['open_id']);
        // $validate->addColumn('is_login', RbacStoreValidate::$alias['is_login']);
        // $validate->addColumn('last_login_time', RbacStoreValidate::$alias['last_login_time']);
        // $validate->addColumn('create_time', RbacStoreValidate::$alias['create_time']);
        // $validate->addColumn('update_time', RbacStoreValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', RbacStoreValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacStoreValidate::$alias['id']);
        // $validate->addColumn('code', RbacStoreValidate::$alias['code']);
        // $validate->addColumn('app_code', RbacStoreValidate::$alias['app_code']);
        // $validate->addColumn('account', RbacStoreValidate::$alias['account']);
        // $validate->addColumn('name', RbacStoreValidate::$alias['name']);
        // $validate->addColumn('mobile', RbacStoreValidate::$alias['mobile']);
        // $validate->addColumn('password', RbacStoreValidate::$alias['password']);
        // $validate->addColumn('owner_code', RbacStoreValidate::$alias['owner_code']);
        // $validate->addColumn('store_code', RbacStoreValidate::$alias['store_code']);
        // $validate->addColumn('type', RbacStoreValidate::$alias['type']);
        // $validate->addColumn('open_id', RbacStoreValidate::$alias['open_id']);
        // $validate->addColumn('is_login', RbacStoreValidate::$alias['is_login']);
        // $validate->addColumn('last_login_time', RbacStoreValidate::$alias['last_login_time']);
        // $validate->addColumn('create_time', RbacStoreValidate::$alias['create_time']);
        // $validate->addColumn('update_time', RbacStoreValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', RbacStoreValidate::$alias['delete_flg']);
        
        return $validate;
    }
}
