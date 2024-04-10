<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class RbacGroupValidate
{
    protected static $alias = [
        'id' => '',
        'code' => '唯一编码',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'name' => '组名称',
        'description' => '描述',
        'create_time' => '创建时间',
        'update_time' => '最后更新时间',
        'delete_flg' => '是否删除',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacGroupValidate::$alias['id']);
        // $validate->addColumn('code', RbacGroupValidate::$alias['code']);
        // $validate->addColumn('app_code', RbacGroupValidate::$alias['app_code']);
        // $validate->addColumn('name', RbacGroupValidate::$alias['name']);
        // $validate->addColumn('description', RbacGroupValidate::$alias['description']);
        // $validate->addColumn('create_time', RbacGroupValidate::$alias['create_time']);
        // $validate->addColumn('update_time', RbacGroupValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', RbacGroupValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacGroupValidate::$alias['id']);
        // $validate->addColumn('code', RbacGroupValidate::$alias['code']);
        // $validate->addColumn('app_code', RbacGroupValidate::$alias['app_code']);
        // $validate->addColumn('name', RbacGroupValidate::$alias['name']);
        // $validate->addColumn('description', RbacGroupValidate::$alias['description']);
        // $validate->addColumn('create_time', RbacGroupValidate::$alias['create_time']);
        // $validate->addColumn('update_time', RbacGroupValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', RbacGroupValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacGroupValidate::$alias['id']);
        // $validate->addColumn('code', RbacGroupValidate::$alias['code']);
        // $validate->addColumn('app_code', RbacGroupValidate::$alias['app_code']);
        // $validate->addColumn('name', RbacGroupValidate::$alias['name']);
        // $validate->addColumn('description', RbacGroupValidate::$alias['description']);
        // $validate->addColumn('create_time', RbacGroupValidate::$alias['create_time']);
        // $validate->addColumn('update_time', RbacGroupValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', RbacGroupValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacGroupValidate::$alias['id']);
        // $validate->addColumn('code', RbacGroupValidate::$alias['code']);
        // $validate->addColumn('app_code', RbacGroupValidate::$alias['app_code']);
        // $validate->addColumn('name', RbacGroupValidate::$alias['name']);
        // $validate->addColumn('description', RbacGroupValidate::$alias['description']);
        // $validate->addColumn('create_time', RbacGroupValidate::$alias['create_time']);
        // $validate->addColumn('update_time', RbacGroupValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', RbacGroupValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacGroupValidate::$alias['id']);
        // $validate->addColumn('code', RbacGroupValidate::$alias['code']);
        // $validate->addColumn('app_code', RbacGroupValidate::$alias['app_code']);
        // $validate->addColumn('name', RbacGroupValidate::$alias['name']);
        // $validate->addColumn('description', RbacGroupValidate::$alias['description']);
        // $validate->addColumn('create_time', RbacGroupValidate::$alias['create_time']);
        // $validate->addColumn('update_time', RbacGroupValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', RbacGroupValidate::$alias['delete_flg']);
        
        return $validate;
    }
}
