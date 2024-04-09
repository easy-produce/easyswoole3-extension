<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class ExpressStoreValidate
{
    protected static $alias = [
        'id' => '',
        'code' => '唯一编码',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'express_code' => '快递商编码',
        'title' => '门店名称',
        'contact' => '联系人',
        'mobile' => '负责人电话',
        'status' => '状态',
        'remark' => '备注',
        'create_user_name' => '创建人用户名',
        'create_user_code' => '创建人code',
        'create_time' => '创建时间',
        'update_time' => '最后更新时间',
        'delete_flg' => '是否删除',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ExpressStoreValidate::$alias['id']);
        // $validate->addColumn('code', ExpressStoreValidate::$alias['code']);
        // $validate->addColumn('app_code', ExpressStoreValidate::$alias['app_code']);
        // $validate->addColumn('express_code', ExpressStoreValidate::$alias['express_code']);
        // $validate->addColumn('title', ExpressStoreValidate::$alias['title']);
        // $validate->addColumn('contact', ExpressStoreValidate::$alias['contact']);
        // $validate->addColumn('mobile', ExpressStoreValidate::$alias['mobile']);
        // $validate->addColumn('status', ExpressStoreValidate::$alias['status']);
        // $validate->addColumn('remark', ExpressStoreValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', ExpressStoreValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', ExpressStoreValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', ExpressStoreValidate::$alias['create_time']);
        // $validate->addColumn('update_time', ExpressStoreValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', ExpressStoreValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ExpressStoreValidate::$alias['id']);
        // $validate->addColumn('code', ExpressStoreValidate::$alias['code']);
        // $validate->addColumn('app_code', ExpressStoreValidate::$alias['app_code']);
        // $validate->addColumn('express_code', ExpressStoreValidate::$alias['express_code']);
        // $validate->addColumn('title', ExpressStoreValidate::$alias['title']);
        // $validate->addColumn('contact', ExpressStoreValidate::$alias['contact']);
        // $validate->addColumn('mobile', ExpressStoreValidate::$alias['mobile']);
        // $validate->addColumn('status', ExpressStoreValidate::$alias['status']);
        // $validate->addColumn('remark', ExpressStoreValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', ExpressStoreValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', ExpressStoreValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', ExpressStoreValidate::$alias['create_time']);
        // $validate->addColumn('update_time', ExpressStoreValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', ExpressStoreValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ExpressStoreValidate::$alias['id']);
        // $validate->addColumn('code', ExpressStoreValidate::$alias['code']);
        // $validate->addColumn('app_code', ExpressStoreValidate::$alias['app_code']);
        // $validate->addColumn('express_code', ExpressStoreValidate::$alias['express_code']);
        // $validate->addColumn('title', ExpressStoreValidate::$alias['title']);
        // $validate->addColumn('contact', ExpressStoreValidate::$alias['contact']);
        // $validate->addColumn('mobile', ExpressStoreValidate::$alias['mobile']);
        // $validate->addColumn('status', ExpressStoreValidate::$alias['status']);
        // $validate->addColumn('remark', ExpressStoreValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', ExpressStoreValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', ExpressStoreValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', ExpressStoreValidate::$alias['create_time']);
        // $validate->addColumn('update_time', ExpressStoreValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', ExpressStoreValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ExpressStoreValidate::$alias['id']);
        // $validate->addColumn('code', ExpressStoreValidate::$alias['code']);
        // $validate->addColumn('app_code', ExpressStoreValidate::$alias['app_code']);
        // $validate->addColumn('express_code', ExpressStoreValidate::$alias['express_code']);
        // $validate->addColumn('title', ExpressStoreValidate::$alias['title']);
        // $validate->addColumn('contact', ExpressStoreValidate::$alias['contact']);
        // $validate->addColumn('mobile', ExpressStoreValidate::$alias['mobile']);
        // $validate->addColumn('status', ExpressStoreValidate::$alias['status']);
        // $validate->addColumn('remark', ExpressStoreValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', ExpressStoreValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', ExpressStoreValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', ExpressStoreValidate::$alias['create_time']);
        // $validate->addColumn('update_time', ExpressStoreValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', ExpressStoreValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ExpressStoreValidate::$alias['id']);
        // $validate->addColumn('code', ExpressStoreValidate::$alias['code']);
        // $validate->addColumn('app_code', ExpressStoreValidate::$alias['app_code']);
        // $validate->addColumn('express_code', ExpressStoreValidate::$alias['express_code']);
        // $validate->addColumn('title', ExpressStoreValidate::$alias['title']);
        // $validate->addColumn('contact', ExpressStoreValidate::$alias['contact']);
        // $validate->addColumn('mobile', ExpressStoreValidate::$alias['mobile']);
        // $validate->addColumn('status', ExpressStoreValidate::$alias['status']);
        // $validate->addColumn('remark', ExpressStoreValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', ExpressStoreValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', ExpressStoreValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', ExpressStoreValidate::$alias['create_time']);
        // $validate->addColumn('update_time', ExpressStoreValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', ExpressStoreValidate::$alias['delete_flg']);
        
        return $validate;
    }
}
