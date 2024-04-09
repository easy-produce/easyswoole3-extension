<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class RbacRoleMenuValidate
{
    protected static $alias = [
        'id' => '',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'role_code' => '角色id',
        'menu_code' => '菜单id',
        'create_time' => '创建时间',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacRoleMenuValidate::$alias['id']);
        // $validate->addColumn('app_code', RbacRoleMenuValidate::$alias['app_code']);
        // $validate->addColumn('role_code', RbacRoleMenuValidate::$alias['role_code']);
        // $validate->addColumn('menu_code', RbacRoleMenuValidate::$alias['menu_code']);
        // $validate->addColumn('create_time', RbacRoleMenuValidate::$alias['create_time']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacRoleMenuValidate::$alias['id']);
        // $validate->addColumn('app_code', RbacRoleMenuValidate::$alias['app_code']);
        // $validate->addColumn('role_code', RbacRoleMenuValidate::$alias['role_code']);
        // $validate->addColumn('menu_code', RbacRoleMenuValidate::$alias['menu_code']);
        // $validate->addColumn('create_time', RbacRoleMenuValidate::$alias['create_time']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacRoleMenuValidate::$alias['id']);
        // $validate->addColumn('app_code', RbacRoleMenuValidate::$alias['app_code']);
        // $validate->addColumn('role_code', RbacRoleMenuValidate::$alias['role_code']);
        // $validate->addColumn('menu_code', RbacRoleMenuValidate::$alias['menu_code']);
        // $validate->addColumn('create_time', RbacRoleMenuValidate::$alias['create_time']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacRoleMenuValidate::$alias['id']);
        // $validate->addColumn('app_code', RbacRoleMenuValidate::$alias['app_code']);
        // $validate->addColumn('role_code', RbacRoleMenuValidate::$alias['role_code']);
        // $validate->addColumn('menu_code', RbacRoleMenuValidate::$alias['menu_code']);
        // $validate->addColumn('create_time', RbacRoleMenuValidate::$alias['create_time']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacRoleMenuValidate::$alias['id']);
        // $validate->addColumn('app_code', RbacRoleMenuValidate::$alias['app_code']);
        // $validate->addColumn('role_code', RbacRoleMenuValidate::$alias['role_code']);
        // $validate->addColumn('menu_code', RbacRoleMenuValidate::$alias['menu_code']);
        // $validate->addColumn('create_time', RbacRoleMenuValidate::$alias['create_time']);
        
        return $validate;
    }
}
