<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class RbacUserValidate
{
    protected static $alias = [
        'id' => '',
        'code' => '唯一编码',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'account' => '帐号',
        'name' => '姓名',
        'mobile' => '手机',
        'password' => '密码',
        'wechat_code' => '对应微信id',
        'wecom_code' => '对应企业微信id',
        'last_login_time' => '最后登录时间',
        'create_time' => '创建时间',
        'update_time' => '最后更新时间',
        'delete_flg' => '是否删除',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacUserValidate::$alias['id']);
        // $validate->addColumn('code', RbacUserValidate::$alias['code']);
        // $validate->addColumn('app_code', RbacUserValidate::$alias['app_code']);
        // $validate->addColumn('account', RbacUserValidate::$alias['account']);
        // $validate->addColumn('name', RbacUserValidate::$alias['name']);
        // $validate->addColumn('mobile', RbacUserValidate::$alias['mobile']);
        // $validate->addColumn('password', RbacUserValidate::$alias['password']);
        // $validate->addColumn('wechat_code', RbacUserValidate::$alias['wechat_code']);
        // $validate->addColumn('wecom_code', RbacUserValidate::$alias['wecom_code']);
        // $validate->addColumn('last_login_time', RbacUserValidate::$alias['last_login_time']);
        // $validate->addColumn('create_time', RbacUserValidate::$alias['create_time']);
        // $validate->addColumn('update_time', RbacUserValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', RbacUserValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacUserValidate::$alias['id']);
        // $validate->addColumn('code', RbacUserValidate::$alias['code']);
        // $validate->addColumn('app_code', RbacUserValidate::$alias['app_code']);
        // $validate->addColumn('account', RbacUserValidate::$alias['account']);
        // $validate->addColumn('name', RbacUserValidate::$alias['name']);
        // $validate->addColumn('mobile', RbacUserValidate::$alias['mobile']);
        // $validate->addColumn('password', RbacUserValidate::$alias['password']);
        // $validate->addColumn('wechat_code', RbacUserValidate::$alias['wechat_code']);
        // $validate->addColumn('wecom_code', RbacUserValidate::$alias['wecom_code']);
        // $validate->addColumn('last_login_time', RbacUserValidate::$alias['last_login_time']);
        // $validate->addColumn('create_time', RbacUserValidate::$alias['create_time']);
        // $validate->addColumn('update_time', RbacUserValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', RbacUserValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacUserValidate::$alias['id']);
        // $validate->addColumn('code', RbacUserValidate::$alias['code']);
        // $validate->addColumn('app_code', RbacUserValidate::$alias['app_code']);
        // $validate->addColumn('account', RbacUserValidate::$alias['account']);
        // $validate->addColumn('name', RbacUserValidate::$alias['name']);
        // $validate->addColumn('mobile', RbacUserValidate::$alias['mobile']);
        // $validate->addColumn('password', RbacUserValidate::$alias['password']);
        // $validate->addColumn('wechat_code', RbacUserValidate::$alias['wechat_code']);
        // $validate->addColumn('wecom_code', RbacUserValidate::$alias['wecom_code']);
        // $validate->addColumn('last_login_time', RbacUserValidate::$alias['last_login_time']);
        // $validate->addColumn('create_time', RbacUserValidate::$alias['create_time']);
        // $validate->addColumn('update_time', RbacUserValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', RbacUserValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacUserValidate::$alias['id']);
        // $validate->addColumn('code', RbacUserValidate::$alias['code']);
        // $validate->addColumn('app_code', RbacUserValidate::$alias['app_code']);
        // $validate->addColumn('account', RbacUserValidate::$alias['account']);
        // $validate->addColumn('name', RbacUserValidate::$alias['name']);
        // $validate->addColumn('mobile', RbacUserValidate::$alias['mobile']);
        // $validate->addColumn('password', RbacUserValidate::$alias['password']);
        // $validate->addColumn('wechat_code', RbacUserValidate::$alias['wechat_code']);
        // $validate->addColumn('wecom_code', RbacUserValidate::$alias['wecom_code']);
        // $validate->addColumn('last_login_time', RbacUserValidate::$alias['last_login_time']);
        // $validate->addColumn('create_time', RbacUserValidate::$alias['create_time']);
        // $validate->addColumn('update_time', RbacUserValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', RbacUserValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacUserValidate::$alias['id']);
        // $validate->addColumn('code', RbacUserValidate::$alias['code']);
        // $validate->addColumn('app_code', RbacUserValidate::$alias['app_code']);
        // $validate->addColumn('account', RbacUserValidate::$alias['account']);
        // $validate->addColumn('name', RbacUserValidate::$alias['name']);
        // $validate->addColumn('mobile', RbacUserValidate::$alias['mobile']);
        // $validate->addColumn('password', RbacUserValidate::$alias['password']);
        // $validate->addColumn('wechat_code', RbacUserValidate::$alias['wechat_code']);
        // $validate->addColumn('wecom_code', RbacUserValidate::$alias['wecom_code']);
        // $validate->addColumn('last_login_time', RbacUserValidate::$alias['last_login_time']);
        // $validate->addColumn('create_time', RbacUserValidate::$alias['create_time']);
        // $validate->addColumn('update_time', RbacUserValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', RbacUserValidate::$alias['delete_flg']);
        
        return $validate;
    }
}
