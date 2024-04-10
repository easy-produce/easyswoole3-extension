<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class RbacOwnerValidate
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

        // $validate->addColumn('id', RbacOwnerValidate::$alias['id']);
        // $validate->addColumn('code', RbacOwnerValidate::$alias['code']);
        // $validate->addColumn('app_code', RbacOwnerValidate::$alias['app_code']);
        // $validate->addColumn('account', RbacOwnerValidate::$alias['account']);
        // $validate->addColumn('name', RbacOwnerValidate::$alias['name']);
        // $validate->addColumn('mobile', RbacOwnerValidate::$alias['mobile']);
        // $validate->addColumn('password', RbacOwnerValidate::$alias['password']);
        // $validate->addColumn('owner_code', RbacOwnerValidate::$alias['owner_code']);
        // $validate->addColumn('open_id', RbacOwnerValidate::$alias['open_id']);
        // $validate->addColumn('is_login', RbacOwnerValidate::$alias['is_login']);
        // $validate->addColumn('last_login_time', RbacOwnerValidate::$alias['last_login_time']);
        // $validate->addColumn('create_time', RbacOwnerValidate::$alias['create_time']);
        // $validate->addColumn('update_time', RbacOwnerValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', RbacOwnerValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacOwnerValidate::$alias['id']);
        // $validate->addColumn('code', RbacOwnerValidate::$alias['code']);
        // $validate->addColumn('app_code', RbacOwnerValidate::$alias['app_code']);
        // $validate->addColumn('account', RbacOwnerValidate::$alias['account']);
        // $validate->addColumn('name', RbacOwnerValidate::$alias['name']);
        // $validate->addColumn('mobile', RbacOwnerValidate::$alias['mobile']);
        // $validate->addColumn('password', RbacOwnerValidate::$alias['password']);
        // $validate->addColumn('owner_code', RbacOwnerValidate::$alias['owner_code']);
        // $validate->addColumn('open_id', RbacOwnerValidate::$alias['open_id']);
        // $validate->addColumn('is_login', RbacOwnerValidate::$alias['is_login']);
        // $validate->addColumn('last_login_time', RbacOwnerValidate::$alias['last_login_time']);
        // $validate->addColumn('create_time', RbacOwnerValidate::$alias['create_time']);
        // $validate->addColumn('update_time', RbacOwnerValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', RbacOwnerValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacOwnerValidate::$alias['id']);
        // $validate->addColumn('code', RbacOwnerValidate::$alias['code']);
        // $validate->addColumn('app_code', RbacOwnerValidate::$alias['app_code']);
        // $validate->addColumn('account', RbacOwnerValidate::$alias['account']);
        // $validate->addColumn('name', RbacOwnerValidate::$alias['name']);
        // $validate->addColumn('mobile', RbacOwnerValidate::$alias['mobile']);
        // $validate->addColumn('password', RbacOwnerValidate::$alias['password']);
        // $validate->addColumn('owner_code', RbacOwnerValidate::$alias['owner_code']);
        // $validate->addColumn('open_id', RbacOwnerValidate::$alias['open_id']);
        // $validate->addColumn('is_login', RbacOwnerValidate::$alias['is_login']);
        // $validate->addColumn('last_login_time', RbacOwnerValidate::$alias['last_login_time']);
        // $validate->addColumn('create_time', RbacOwnerValidate::$alias['create_time']);
        // $validate->addColumn('update_time', RbacOwnerValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', RbacOwnerValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacOwnerValidate::$alias['id']);
        // $validate->addColumn('code', RbacOwnerValidate::$alias['code']);
        // $validate->addColumn('app_code', RbacOwnerValidate::$alias['app_code']);
        // $validate->addColumn('account', RbacOwnerValidate::$alias['account']);
        // $validate->addColumn('name', RbacOwnerValidate::$alias['name']);
        // $validate->addColumn('mobile', RbacOwnerValidate::$alias['mobile']);
        // $validate->addColumn('password', RbacOwnerValidate::$alias['password']);
        // $validate->addColumn('owner_code', RbacOwnerValidate::$alias['owner_code']);
        // $validate->addColumn('open_id', RbacOwnerValidate::$alias['open_id']);
        // $validate->addColumn('is_login', RbacOwnerValidate::$alias['is_login']);
        // $validate->addColumn('last_login_time', RbacOwnerValidate::$alias['last_login_time']);
        // $validate->addColumn('create_time', RbacOwnerValidate::$alias['create_time']);
        // $validate->addColumn('update_time', RbacOwnerValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', RbacOwnerValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacOwnerValidate::$alias['id']);
        // $validate->addColumn('code', RbacOwnerValidate::$alias['code']);
        // $validate->addColumn('app_code', RbacOwnerValidate::$alias['app_code']);
        // $validate->addColumn('account', RbacOwnerValidate::$alias['account']);
        // $validate->addColumn('name', RbacOwnerValidate::$alias['name']);
        // $validate->addColumn('mobile', RbacOwnerValidate::$alias['mobile']);
        // $validate->addColumn('password', RbacOwnerValidate::$alias['password']);
        // $validate->addColumn('owner_code', RbacOwnerValidate::$alias['owner_code']);
        // $validate->addColumn('open_id', RbacOwnerValidate::$alias['open_id']);
        // $validate->addColumn('is_login', RbacOwnerValidate::$alias['is_login']);
        // $validate->addColumn('last_login_time', RbacOwnerValidate::$alias['last_login_time']);
        // $validate->addColumn('create_time', RbacOwnerValidate::$alias['create_time']);
        // $validate->addColumn('update_time', RbacOwnerValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', RbacOwnerValidate::$alias['delete_flg']);
        
        return $validate;
    }
}
