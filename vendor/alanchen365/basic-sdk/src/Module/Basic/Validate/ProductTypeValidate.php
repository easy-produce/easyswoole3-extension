<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class ProductTypeValidate
{
    protected static $alias = [
        'id' => '',
        'code' => '唯一编码',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'owner_code' => '货主编码',
        'owner_name' => '货主名称',
        'name' => '类别名称',
        'total' => '产品数',
        'sort' => '排序',
        'is_show' => '是否前台显示',
        'delete_flg' => '是否删除',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductTypeValidate::$alias['id']);
        // $validate->addColumn('code', ProductTypeValidate::$alias['code']);
        // $validate->addColumn('app_code', ProductTypeValidate::$alias['app_code']);
        // $validate->addColumn('owner_code', ProductTypeValidate::$alias['owner_code']);
        // $validate->addColumn('owner_name', ProductTypeValidate::$alias['owner_name']);
        // $validate->addColumn('name', ProductTypeValidate::$alias['name']);
        // $validate->addColumn('total', ProductTypeValidate::$alias['total']);
        // $validate->addColumn('sort', ProductTypeValidate::$alias['sort']);
        // $validate->addColumn('is_show', ProductTypeValidate::$alias['is_show']);
        // $validate->addColumn('delete_flg', ProductTypeValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductTypeValidate::$alias['id']);
        // $validate->addColumn('code', ProductTypeValidate::$alias['code']);
        // $validate->addColumn('app_code', ProductTypeValidate::$alias['app_code']);
        // $validate->addColumn('owner_code', ProductTypeValidate::$alias['owner_code']);
        // $validate->addColumn('owner_name', ProductTypeValidate::$alias['owner_name']);
        // $validate->addColumn('name', ProductTypeValidate::$alias['name']);
        // $validate->addColumn('total', ProductTypeValidate::$alias['total']);
        // $validate->addColumn('sort', ProductTypeValidate::$alias['sort']);
        // $validate->addColumn('is_show', ProductTypeValidate::$alias['is_show']);
        // $validate->addColumn('delete_flg', ProductTypeValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductTypeValidate::$alias['id']);
        // $validate->addColumn('code', ProductTypeValidate::$alias['code']);
        // $validate->addColumn('app_code', ProductTypeValidate::$alias['app_code']);
        // $validate->addColumn('owner_code', ProductTypeValidate::$alias['owner_code']);
        // $validate->addColumn('owner_name', ProductTypeValidate::$alias['owner_name']);
        // $validate->addColumn('name', ProductTypeValidate::$alias['name']);
        // $validate->addColumn('total', ProductTypeValidate::$alias['total']);
        // $validate->addColumn('sort', ProductTypeValidate::$alias['sort']);
        // $validate->addColumn('is_show', ProductTypeValidate::$alias['is_show']);
        // $validate->addColumn('delete_flg', ProductTypeValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductTypeValidate::$alias['id']);
        // $validate->addColumn('code', ProductTypeValidate::$alias['code']);
        // $validate->addColumn('app_code', ProductTypeValidate::$alias['app_code']);
        // $validate->addColumn('owner_code', ProductTypeValidate::$alias['owner_code']);
        // $validate->addColumn('owner_name', ProductTypeValidate::$alias['owner_name']);
        // $validate->addColumn('name', ProductTypeValidate::$alias['name']);
        // $validate->addColumn('total', ProductTypeValidate::$alias['total']);
        // $validate->addColumn('sort', ProductTypeValidate::$alias['sort']);
        // $validate->addColumn('is_show', ProductTypeValidate::$alias['is_show']);
        // $validate->addColumn('delete_flg', ProductTypeValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductTypeValidate::$alias['id']);
        // $validate->addColumn('code', ProductTypeValidate::$alias['code']);
        // $validate->addColumn('app_code', ProductTypeValidate::$alias['app_code']);
        // $validate->addColumn('owner_code', ProductTypeValidate::$alias['owner_code']);
        // $validate->addColumn('owner_name', ProductTypeValidate::$alias['owner_name']);
        // $validate->addColumn('name', ProductTypeValidate::$alias['name']);
        // $validate->addColumn('total', ProductTypeValidate::$alias['total']);
        // $validate->addColumn('sort', ProductTypeValidate::$alias['sort']);
        // $validate->addColumn('is_show', ProductTypeValidate::$alias['is_show']);
        // $validate->addColumn('delete_flg', ProductTypeValidate::$alias['delete_flg']);
        
        return $validate;
    }
}
