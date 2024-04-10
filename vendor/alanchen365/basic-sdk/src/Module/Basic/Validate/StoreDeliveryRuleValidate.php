<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class StoreDeliveryRuleValidate
{
    protected static $alias = [
        'id' => '',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'store_id' => '门店编号',
        'rule_type' => '执行规则类型 ',
        'rule_detail' => '规则详情',
        'st_create_time' => '门店下单时间',
        'st_ctime_type' => '',
        'st_autoreceive_time' => '发车后自动收货时间',
        'create_user_name' => '创建人用户名',
        'create_user_code' => '创建人code',
        'create_time' => '创建时间',
        'update_time' => '最后更新时间',
        'delete_flg' => '是否删除',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', StoreDeliveryRuleValidate::$alias['id']);
        // $validate->addColumn('app_code', StoreDeliveryRuleValidate::$alias['app_code']);
        // $validate->addColumn('store_id', StoreDeliveryRuleValidate::$alias['store_id']);
        // $validate->addColumn('rule_type', StoreDeliveryRuleValidate::$alias['rule_type']);
        // $validate->addColumn('rule_detail', StoreDeliveryRuleValidate::$alias['rule_detail']);
        // $validate->addColumn('st_create_time', StoreDeliveryRuleValidate::$alias['st_create_time']);
        // $validate->addColumn('st_ctime_type', StoreDeliveryRuleValidate::$alias['st_ctime_type']);
        // $validate->addColumn('st_autoreceive_time', StoreDeliveryRuleValidate::$alias['st_autoreceive_time']);
        // $validate->addColumn('create_user_name', StoreDeliveryRuleValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', StoreDeliveryRuleValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', StoreDeliveryRuleValidate::$alias['create_time']);
        // $validate->addColumn('update_time', StoreDeliveryRuleValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', StoreDeliveryRuleValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', StoreDeliveryRuleValidate::$alias['id']);
        // $validate->addColumn('app_code', StoreDeliveryRuleValidate::$alias['app_code']);
        // $validate->addColumn('store_id', StoreDeliveryRuleValidate::$alias['store_id']);
        // $validate->addColumn('rule_type', StoreDeliveryRuleValidate::$alias['rule_type']);
        // $validate->addColumn('rule_detail', StoreDeliveryRuleValidate::$alias['rule_detail']);
        // $validate->addColumn('st_create_time', StoreDeliveryRuleValidate::$alias['st_create_time']);
        // $validate->addColumn('st_ctime_type', StoreDeliveryRuleValidate::$alias['st_ctime_type']);
        // $validate->addColumn('st_autoreceive_time', StoreDeliveryRuleValidate::$alias['st_autoreceive_time']);
        // $validate->addColumn('create_user_name', StoreDeliveryRuleValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', StoreDeliveryRuleValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', StoreDeliveryRuleValidate::$alias['create_time']);
        // $validate->addColumn('update_time', StoreDeliveryRuleValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', StoreDeliveryRuleValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', StoreDeliveryRuleValidate::$alias['id']);
        // $validate->addColumn('app_code', StoreDeliveryRuleValidate::$alias['app_code']);
        // $validate->addColumn('store_id', StoreDeliveryRuleValidate::$alias['store_id']);
        // $validate->addColumn('rule_type', StoreDeliveryRuleValidate::$alias['rule_type']);
        // $validate->addColumn('rule_detail', StoreDeliveryRuleValidate::$alias['rule_detail']);
        // $validate->addColumn('st_create_time', StoreDeliveryRuleValidate::$alias['st_create_time']);
        // $validate->addColumn('st_ctime_type', StoreDeliveryRuleValidate::$alias['st_ctime_type']);
        // $validate->addColumn('st_autoreceive_time', StoreDeliveryRuleValidate::$alias['st_autoreceive_time']);
        // $validate->addColumn('create_user_name', StoreDeliveryRuleValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', StoreDeliveryRuleValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', StoreDeliveryRuleValidate::$alias['create_time']);
        // $validate->addColumn('update_time', StoreDeliveryRuleValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', StoreDeliveryRuleValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', StoreDeliveryRuleValidate::$alias['id']);
        // $validate->addColumn('app_code', StoreDeliveryRuleValidate::$alias['app_code']);
        // $validate->addColumn('store_id', StoreDeliveryRuleValidate::$alias['store_id']);
        // $validate->addColumn('rule_type', StoreDeliveryRuleValidate::$alias['rule_type']);
        // $validate->addColumn('rule_detail', StoreDeliveryRuleValidate::$alias['rule_detail']);
        // $validate->addColumn('st_create_time', StoreDeliveryRuleValidate::$alias['st_create_time']);
        // $validate->addColumn('st_ctime_type', StoreDeliveryRuleValidate::$alias['st_ctime_type']);
        // $validate->addColumn('st_autoreceive_time', StoreDeliveryRuleValidate::$alias['st_autoreceive_time']);
        // $validate->addColumn('create_user_name', StoreDeliveryRuleValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', StoreDeliveryRuleValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', StoreDeliveryRuleValidate::$alias['create_time']);
        // $validate->addColumn('update_time', StoreDeliveryRuleValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', StoreDeliveryRuleValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', StoreDeliveryRuleValidate::$alias['id']);
        // $validate->addColumn('app_code', StoreDeliveryRuleValidate::$alias['app_code']);
        // $validate->addColumn('store_id', StoreDeliveryRuleValidate::$alias['store_id']);
        // $validate->addColumn('rule_type', StoreDeliveryRuleValidate::$alias['rule_type']);
        // $validate->addColumn('rule_detail', StoreDeliveryRuleValidate::$alias['rule_detail']);
        // $validate->addColumn('st_create_time', StoreDeliveryRuleValidate::$alias['st_create_time']);
        // $validate->addColumn('st_ctime_type', StoreDeliveryRuleValidate::$alias['st_ctime_type']);
        // $validate->addColumn('st_autoreceive_time', StoreDeliveryRuleValidate::$alias['st_autoreceive_time']);
        // $validate->addColumn('create_user_name', StoreDeliveryRuleValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', StoreDeliveryRuleValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', StoreDeliveryRuleValidate::$alias['create_time']);
        // $validate->addColumn('update_time', StoreDeliveryRuleValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', StoreDeliveryRuleValidate::$alias['delete_flg']);
        
        return $validate;
    }
}
