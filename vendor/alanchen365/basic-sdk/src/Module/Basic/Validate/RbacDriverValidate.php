<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class RbacDriverValidate
{
    protected static $alias = [
        'id' => '',
        'code' => '唯一编码',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'account' => '帐号',
        'name' => '姓名',
        'mobile' => '手机',
        'password' => '密码',
        'driver_code' => '司机id',
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

        // $validate->addColumn('id', RbacDriverValidate::$alias['id']);
        // $validate->addColumn('code', RbacDriverValidate::$alias['code']);
        // $validate->addColumn('app_code', RbacDriverValidate::$alias['app_code']);
        // $validate->addColumn('account', RbacDriverValidate::$alias['account']);
        // $validate->addColumn('name', RbacDriverValidate::$alias['name']);
        // $validate->addColumn('mobile', RbacDriverValidate::$alias['mobile']);
        // $validate->addColumn('password', RbacDriverValidate::$alias['password']);
        // $validate->addColumn('driver_code', RbacDriverValidate::$alias['driver_code']);
        // $validate->addColumn('open_id', RbacDriverValidate::$alias['open_id']);
        // $validate->addColumn('is_login', RbacDriverValidate::$alias['is_login']);
        // $validate->addColumn('last_login_time', RbacDriverValidate::$alias['last_login_time']);
        // $validate->addColumn('create_time', RbacDriverValidate::$alias['create_time']);
        // $validate->addColumn('update_time', RbacDriverValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', RbacDriverValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacDriverValidate::$alias['id']);
        // $validate->addColumn('code', RbacDriverValidate::$alias['code']);
        // $validate->addColumn('app_code', RbacDriverValidate::$alias['app_code']);
        // $validate->addColumn('account', RbacDriverValidate::$alias['account']);
        // $validate->addColumn('name', RbacDriverValidate::$alias['name']);
        // $validate->addColumn('mobile', RbacDriverValidate::$alias['mobile']);
        // $validate->addColumn('password', RbacDriverValidate::$alias['password']);
        // $validate->addColumn('driver_code', RbacDriverValidate::$alias['driver_code']);
        // $validate->addColumn('open_id', RbacDriverValidate::$alias['open_id']);
        // $validate->addColumn('is_login', RbacDriverValidate::$alias['is_login']);
        // $validate->addColumn('last_login_time', RbacDriverValidate::$alias['last_login_time']);
        // $validate->addColumn('create_time', RbacDriverValidate::$alias['create_time']);
        // $validate->addColumn('update_time', RbacDriverValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', RbacDriverValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacDriverValidate::$alias['id']);
        // $validate->addColumn('code', RbacDriverValidate::$alias['code']);
        // $validate->addColumn('app_code', RbacDriverValidate::$alias['app_code']);
        // $validate->addColumn('account', RbacDriverValidate::$alias['account']);
        // $validate->addColumn('name', RbacDriverValidate::$alias['name']);
        // $validate->addColumn('mobile', RbacDriverValidate::$alias['mobile']);
        // $validate->addColumn('password', RbacDriverValidate::$alias['password']);
        // $validate->addColumn('driver_code', RbacDriverValidate::$alias['driver_code']);
        // $validate->addColumn('open_id', RbacDriverValidate::$alias['open_id']);
        // $validate->addColumn('is_login', RbacDriverValidate::$alias['is_login']);
        // $validate->addColumn('last_login_time', RbacDriverValidate::$alias['last_login_time']);
        // $validate->addColumn('create_time', RbacDriverValidate::$alias['create_time']);
        // $validate->addColumn('update_time', RbacDriverValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', RbacDriverValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacDriverValidate::$alias['id']);
        // $validate->addColumn('code', RbacDriverValidate::$alias['code']);
        // $validate->addColumn('app_code', RbacDriverValidate::$alias['app_code']);
        // $validate->addColumn('account', RbacDriverValidate::$alias['account']);
        // $validate->addColumn('name', RbacDriverValidate::$alias['name']);
        // $validate->addColumn('mobile', RbacDriverValidate::$alias['mobile']);
        // $validate->addColumn('password', RbacDriverValidate::$alias['password']);
        // $validate->addColumn('driver_code', RbacDriverValidate::$alias['driver_code']);
        // $validate->addColumn('open_id', RbacDriverValidate::$alias['open_id']);
        // $validate->addColumn('is_login', RbacDriverValidate::$alias['is_login']);
        // $validate->addColumn('last_login_time', RbacDriverValidate::$alias['last_login_time']);
        // $validate->addColumn('create_time', RbacDriverValidate::$alias['create_time']);
        // $validate->addColumn('update_time', RbacDriverValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', RbacDriverValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacDriverValidate::$alias['id']);
        // $validate->addColumn('code', RbacDriverValidate::$alias['code']);
        // $validate->addColumn('app_code', RbacDriverValidate::$alias['app_code']);
        // $validate->addColumn('account', RbacDriverValidate::$alias['account']);
        // $validate->addColumn('name', RbacDriverValidate::$alias['name']);
        // $validate->addColumn('mobile', RbacDriverValidate::$alias['mobile']);
        // $validate->addColumn('password', RbacDriverValidate::$alias['password']);
        // $validate->addColumn('driver_code', RbacDriverValidate::$alias['driver_code']);
        // $validate->addColumn('open_id', RbacDriverValidate::$alias['open_id']);
        // $validate->addColumn('is_login', RbacDriverValidate::$alias['is_login']);
        // $validate->addColumn('last_login_time', RbacDriverValidate::$alias['last_login_time']);
        // $validate->addColumn('create_time', RbacDriverValidate::$alias['create_time']);
        // $validate->addColumn('update_time', RbacDriverValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', RbacDriverValidate::$alias['delete_flg']);
        
        return $validate;
    }
}
