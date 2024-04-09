<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class RbacGroupRoleValidate
{
    protected static $alias = [
        'id' => '',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'group_code' => '用户组id',
        'role_code' => '角色id',
        'create_time' => '创建时间',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacGroupRoleValidate::$alias['id']);
        // $validate->addColumn('app_code', RbacGroupRoleValidate::$alias['app_code']);
        // $validate->addColumn('group_code', RbacGroupRoleValidate::$alias['group_code']);
        // $validate->addColumn('role_code', RbacGroupRoleValidate::$alias['role_code']);
        // $validate->addColumn('create_time', RbacGroupRoleValidate::$alias['create_time']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacGroupRoleValidate::$alias['id']);
        // $validate->addColumn('app_code', RbacGroupRoleValidate::$alias['app_code']);
        // $validate->addColumn('group_code', RbacGroupRoleValidate::$alias['group_code']);
        // $validate->addColumn('role_code', RbacGroupRoleValidate::$alias['role_code']);
        // $validate->addColumn('create_time', RbacGroupRoleValidate::$alias['create_time']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacGroupRoleValidate::$alias['id']);
        // $validate->addColumn('app_code', RbacGroupRoleValidate::$alias['app_code']);
        // $validate->addColumn('group_code', RbacGroupRoleValidate::$alias['group_code']);
        // $validate->addColumn('role_code', RbacGroupRoleValidate::$alias['role_code']);
        // $validate->addColumn('create_time', RbacGroupRoleValidate::$alias['create_time']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacGroupRoleValidate::$alias['id']);
        // $validate->addColumn('app_code', RbacGroupRoleValidate::$alias['app_code']);
        // $validate->addColumn('group_code', RbacGroupRoleValidate::$alias['group_code']);
        // $validate->addColumn('role_code', RbacGroupRoleValidate::$alias['role_code']);
        // $validate->addColumn('create_time', RbacGroupRoleValidate::$alias['create_time']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacGroupRoleValidate::$alias['id']);
        // $validate->addColumn('app_code', RbacGroupRoleValidate::$alias['app_code']);
        // $validate->addColumn('group_code', RbacGroupRoleValidate::$alias['group_code']);
        // $validate->addColumn('role_code', RbacGroupRoleValidate::$alias['role_code']);
        // $validate->addColumn('create_time', RbacGroupRoleValidate::$alias['create_time']);
        
        return $validate;
    }
}
