<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class RbacUserGroupValidate
{
    protected static $alias = [
        'id' => '',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'user_code' => '用户id',
        'group_code' => '用户组id',
        'create_time' => '创建时间',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacUserGroupValidate::$alias['id']);
        // $validate->addColumn('app_code', RbacUserGroupValidate::$alias['app_code']);
        // $validate->addColumn('user_code', RbacUserGroupValidate::$alias['user_code']);
        // $validate->addColumn('group_code', RbacUserGroupValidate::$alias['group_code']);
        // $validate->addColumn('create_time', RbacUserGroupValidate::$alias['create_time']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacUserGroupValidate::$alias['id']);
        // $validate->addColumn('app_code', RbacUserGroupValidate::$alias['app_code']);
        // $validate->addColumn('user_code', RbacUserGroupValidate::$alias['user_code']);
        // $validate->addColumn('group_code', RbacUserGroupValidate::$alias['group_code']);
        // $validate->addColumn('create_time', RbacUserGroupValidate::$alias['create_time']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacUserGroupValidate::$alias['id']);
        // $validate->addColumn('app_code', RbacUserGroupValidate::$alias['app_code']);
        // $validate->addColumn('user_code', RbacUserGroupValidate::$alias['user_code']);
        // $validate->addColumn('group_code', RbacUserGroupValidate::$alias['group_code']);
        // $validate->addColumn('create_time', RbacUserGroupValidate::$alias['create_time']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacUserGroupValidate::$alias['id']);
        // $validate->addColumn('app_code', RbacUserGroupValidate::$alias['app_code']);
        // $validate->addColumn('user_code', RbacUserGroupValidate::$alias['user_code']);
        // $validate->addColumn('group_code', RbacUserGroupValidate::$alias['group_code']);
        // $validate->addColumn('create_time', RbacUserGroupValidate::$alias['create_time']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacUserGroupValidate::$alias['id']);
        // $validate->addColumn('app_code', RbacUserGroupValidate::$alias['app_code']);
        // $validate->addColumn('user_code', RbacUserGroupValidate::$alias['user_code']);
        // $validate->addColumn('group_code', RbacUserGroupValidate::$alias['group_code']);
        // $validate->addColumn('create_time', RbacUserGroupValidate::$alias['create_time']);
        
        return $validate;
    }
}
