<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class RbacRoleValidate
{
    protected static $alias = [
        'id' => '',
        'code' => '唯一编码',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'name' => '名称',
        'description' => '描述',
        'create_time' => '创建时间',
        'update_time' => '最后更新时间',
        'delete_flg' => '是否删除',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacRoleValidate::$alias['id']);
        // $validate->addColumn('code', RbacRoleValidate::$alias['code']);
        // $validate->addColumn('app_code', RbacRoleValidate::$alias['app_code']);
        // $validate->addColumn('name', RbacRoleValidate::$alias['name']);
        // $validate->addColumn('description', RbacRoleValidate::$alias['description']);
        // $validate->addColumn('create_time', RbacRoleValidate::$alias['create_time']);
        // $validate->addColumn('update_time', RbacRoleValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', RbacRoleValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacRoleValidate::$alias['id']);
        // $validate->addColumn('code', RbacRoleValidate::$alias['code']);
        // $validate->addColumn('app_code', RbacRoleValidate::$alias['app_code']);
        // $validate->addColumn('name', RbacRoleValidate::$alias['name']);
        // $validate->addColumn('description', RbacRoleValidate::$alias['description']);
        // $validate->addColumn('create_time', RbacRoleValidate::$alias['create_time']);
        // $validate->addColumn('update_time', RbacRoleValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', RbacRoleValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacRoleValidate::$alias['id']);
        // $validate->addColumn('code', RbacRoleValidate::$alias['code']);
        // $validate->addColumn('app_code', RbacRoleValidate::$alias['app_code']);
        // $validate->addColumn('name', RbacRoleValidate::$alias['name']);
        // $validate->addColumn('description', RbacRoleValidate::$alias['description']);
        // $validate->addColumn('create_time', RbacRoleValidate::$alias['create_time']);
        // $validate->addColumn('update_time', RbacRoleValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', RbacRoleValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacRoleValidate::$alias['id']);
        // $validate->addColumn('code', RbacRoleValidate::$alias['code']);
        // $validate->addColumn('app_code', RbacRoleValidate::$alias['app_code']);
        // $validate->addColumn('name', RbacRoleValidate::$alias['name']);
        // $validate->addColumn('description', RbacRoleValidate::$alias['description']);
        // $validate->addColumn('create_time', RbacRoleValidate::$alias['create_time']);
        // $validate->addColumn('update_time', RbacRoleValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', RbacRoleValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacRoleValidate::$alias['id']);
        // $validate->addColumn('code', RbacRoleValidate::$alias['code']);
        // $validate->addColumn('app_code', RbacRoleValidate::$alias['app_code']);
        // $validate->addColumn('name', RbacRoleValidate::$alias['name']);
        // $validate->addColumn('description', RbacRoleValidate::$alias['description']);
        // $validate->addColumn('create_time', RbacRoleValidate::$alias['create_time']);
        // $validate->addColumn('update_time', RbacRoleValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', RbacRoleValidate::$alias['delete_flg']);
        
        return $validate;
    }
}
