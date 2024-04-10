<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class RbacMenuValidate
{
    protected static $alias = [
        'id' => '',
        'code' => '唯一编码',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'name' => '菜单名',
        'url' => '功能url',
        'icon' => '菜单图标',
        'level' => '等级',
        'parent_id' => '上级id',
        'sort' => '排序',
        'is_unfold' => '是否展开',
        'status' => '是否显示',
        'update_time' => '最后更新时间',
        'create_time' => '创建时间',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacMenuValidate::$alias['id']);
        // $validate->addColumn('code', RbacMenuValidate::$alias['code']);
        // $validate->addColumn('app_code', RbacMenuValidate::$alias['app_code']);
        // $validate->addColumn('name', RbacMenuValidate::$alias['name']);
        // $validate->addColumn('url', RbacMenuValidate::$alias['url']);
        // $validate->addColumn('icon', RbacMenuValidate::$alias['icon']);
        // $validate->addColumn('level', RbacMenuValidate::$alias['level']);
        // $validate->addColumn('parent_id', RbacMenuValidate::$alias['parent_id']);
        // $validate->addColumn('sort', RbacMenuValidate::$alias['sort']);
        // $validate->addColumn('is_unfold', RbacMenuValidate::$alias['is_unfold']);
        // $validate->addColumn('status', RbacMenuValidate::$alias['status']);
        // $validate->addColumn('update_time', RbacMenuValidate::$alias['update_time']);
        // $validate->addColumn('create_time', RbacMenuValidate::$alias['create_time']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacMenuValidate::$alias['id']);
        // $validate->addColumn('code', RbacMenuValidate::$alias['code']);
        // $validate->addColumn('app_code', RbacMenuValidate::$alias['app_code']);
        // $validate->addColumn('name', RbacMenuValidate::$alias['name']);
        // $validate->addColumn('url', RbacMenuValidate::$alias['url']);
        // $validate->addColumn('icon', RbacMenuValidate::$alias['icon']);
        // $validate->addColumn('level', RbacMenuValidate::$alias['level']);
        // $validate->addColumn('parent_id', RbacMenuValidate::$alias['parent_id']);
        // $validate->addColumn('sort', RbacMenuValidate::$alias['sort']);
        // $validate->addColumn('is_unfold', RbacMenuValidate::$alias['is_unfold']);
        // $validate->addColumn('status', RbacMenuValidate::$alias['status']);
        // $validate->addColumn('update_time', RbacMenuValidate::$alias['update_time']);
        // $validate->addColumn('create_time', RbacMenuValidate::$alias['create_time']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacMenuValidate::$alias['id']);
        // $validate->addColumn('code', RbacMenuValidate::$alias['code']);
        // $validate->addColumn('app_code', RbacMenuValidate::$alias['app_code']);
        // $validate->addColumn('name', RbacMenuValidate::$alias['name']);
        // $validate->addColumn('url', RbacMenuValidate::$alias['url']);
        // $validate->addColumn('icon', RbacMenuValidate::$alias['icon']);
        // $validate->addColumn('level', RbacMenuValidate::$alias['level']);
        // $validate->addColumn('parent_id', RbacMenuValidate::$alias['parent_id']);
        // $validate->addColumn('sort', RbacMenuValidate::$alias['sort']);
        // $validate->addColumn('is_unfold', RbacMenuValidate::$alias['is_unfold']);
        // $validate->addColumn('status', RbacMenuValidate::$alias['status']);
        // $validate->addColumn('update_time', RbacMenuValidate::$alias['update_time']);
        // $validate->addColumn('create_time', RbacMenuValidate::$alias['create_time']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacMenuValidate::$alias['id']);
        // $validate->addColumn('code', RbacMenuValidate::$alias['code']);
        // $validate->addColumn('app_code', RbacMenuValidate::$alias['app_code']);
        // $validate->addColumn('name', RbacMenuValidate::$alias['name']);
        // $validate->addColumn('url', RbacMenuValidate::$alias['url']);
        // $validate->addColumn('icon', RbacMenuValidate::$alias['icon']);
        // $validate->addColumn('level', RbacMenuValidate::$alias['level']);
        // $validate->addColumn('parent_id', RbacMenuValidate::$alias['parent_id']);
        // $validate->addColumn('sort', RbacMenuValidate::$alias['sort']);
        // $validate->addColumn('is_unfold', RbacMenuValidate::$alias['is_unfold']);
        // $validate->addColumn('status', RbacMenuValidate::$alias['status']);
        // $validate->addColumn('update_time', RbacMenuValidate::$alias['update_time']);
        // $validate->addColumn('create_time', RbacMenuValidate::$alias['create_time']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacMenuValidate::$alias['id']);
        // $validate->addColumn('code', RbacMenuValidate::$alias['code']);
        // $validate->addColumn('app_code', RbacMenuValidate::$alias['app_code']);
        // $validate->addColumn('name', RbacMenuValidate::$alias['name']);
        // $validate->addColumn('url', RbacMenuValidate::$alias['url']);
        // $validate->addColumn('icon', RbacMenuValidate::$alias['icon']);
        // $validate->addColumn('level', RbacMenuValidate::$alias['level']);
        // $validate->addColumn('parent_id', RbacMenuValidate::$alias['parent_id']);
        // $validate->addColumn('sort', RbacMenuValidate::$alias['sort']);
        // $validate->addColumn('is_unfold', RbacMenuValidate::$alias['is_unfold']);
        // $validate->addColumn('status', RbacMenuValidate::$alias['status']);
        // $validate->addColumn('update_time', RbacMenuValidate::$alias['update_time']);
        // $validate->addColumn('create_time', RbacMenuValidate::$alias['create_time']);
        
        return $validate;
    }
}
