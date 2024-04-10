<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class OrganValidate
{
    protected static $alias = [
        'id' => 'ID',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'name' => '组织名称',
        'code' => '组织编号',
        'level' => '组织层级',
        'parent_id' => '父级ID',
        'remark' => '备注',
        'is_leaf' => '是否为叶子节点',
        'sort' => '排序',
        'create_user_name' => '创建人用户名',
        'create_user_code' => '创建人code',
        'create_time' => '创建时间',
        'update_time' => '最后更新时间',
        'delete_flg' => '是否删除',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OrganValidate::$alias['id']);
        // $validate->addColumn('app_code', OrganValidate::$alias['app_code']);
        // $validate->addColumn('name', OrganValidate::$alias['name']);
        // $validate->addColumn('code', OrganValidate::$alias['code']);
        // $validate->addColumn('level', OrganValidate::$alias['level']);
        // $validate->addColumn('parent_id', OrganValidate::$alias['parent_id']);
        // $validate->addColumn('remark', OrganValidate::$alias['remark']);
        // $validate->addColumn('is_leaf', OrganValidate::$alias['is_leaf']);
        // $validate->addColumn('sort', OrganValidate::$alias['sort']);
        // $validate->addColumn('create_user_name', OrganValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', OrganValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', OrganValidate::$alias['create_time']);
        // $validate->addColumn('update_time', OrganValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', OrganValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OrganValidate::$alias['id']);
        // $validate->addColumn('app_code', OrganValidate::$alias['app_code']);
        // $validate->addColumn('name', OrganValidate::$alias['name']);
        // $validate->addColumn('code', OrganValidate::$alias['code']);
        // $validate->addColumn('level', OrganValidate::$alias['level']);
        // $validate->addColumn('parent_id', OrganValidate::$alias['parent_id']);
        // $validate->addColumn('remark', OrganValidate::$alias['remark']);
        // $validate->addColumn('is_leaf', OrganValidate::$alias['is_leaf']);
        // $validate->addColumn('sort', OrganValidate::$alias['sort']);
        // $validate->addColumn('create_user_name', OrganValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', OrganValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', OrganValidate::$alias['create_time']);
        // $validate->addColumn('update_time', OrganValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', OrganValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OrganValidate::$alias['id']);
        // $validate->addColumn('app_code', OrganValidate::$alias['app_code']);
        // $validate->addColumn('name', OrganValidate::$alias['name']);
        // $validate->addColumn('code', OrganValidate::$alias['code']);
        // $validate->addColumn('level', OrganValidate::$alias['level']);
        // $validate->addColumn('parent_id', OrganValidate::$alias['parent_id']);
        // $validate->addColumn('remark', OrganValidate::$alias['remark']);
        // $validate->addColumn('is_leaf', OrganValidate::$alias['is_leaf']);
        // $validate->addColumn('sort', OrganValidate::$alias['sort']);
        // $validate->addColumn('create_user_name', OrganValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', OrganValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', OrganValidate::$alias['create_time']);
        // $validate->addColumn('update_time', OrganValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', OrganValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OrganValidate::$alias['id']);
        // $validate->addColumn('app_code', OrganValidate::$alias['app_code']);
        // $validate->addColumn('name', OrganValidate::$alias['name']);
        // $validate->addColumn('code', OrganValidate::$alias['code']);
        // $validate->addColumn('level', OrganValidate::$alias['level']);
        // $validate->addColumn('parent_id', OrganValidate::$alias['parent_id']);
        // $validate->addColumn('remark', OrganValidate::$alias['remark']);
        // $validate->addColumn('is_leaf', OrganValidate::$alias['is_leaf']);
        // $validate->addColumn('sort', OrganValidate::$alias['sort']);
        // $validate->addColumn('create_user_name', OrganValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', OrganValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', OrganValidate::$alias['create_time']);
        // $validate->addColumn('update_time', OrganValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', OrganValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OrganValidate::$alias['id']);
        // $validate->addColumn('app_code', OrganValidate::$alias['app_code']);
        // $validate->addColumn('name', OrganValidate::$alias['name']);
        // $validate->addColumn('code', OrganValidate::$alias['code']);
        // $validate->addColumn('level', OrganValidate::$alias['level']);
        // $validate->addColumn('parent_id', OrganValidate::$alias['parent_id']);
        // $validate->addColumn('remark', OrganValidate::$alias['remark']);
        // $validate->addColumn('is_leaf', OrganValidate::$alias['is_leaf']);
        // $validate->addColumn('sort', OrganValidate::$alias['sort']);
        // $validate->addColumn('create_user_name', OrganValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', OrganValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', OrganValidate::$alias['create_time']);
        // $validate->addColumn('update_time', OrganValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', OrganValidate::$alias['delete_flg']);
        
        return $validate;
    }
}
