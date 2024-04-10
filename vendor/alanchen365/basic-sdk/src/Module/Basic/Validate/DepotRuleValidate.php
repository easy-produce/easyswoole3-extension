<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class DepotRuleValidate
{
    protected static $alias = [
        'id' => '',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'owner_id' => '货主编号',
        'store_ids' => '门店集合编号',
        'product_ids' => '产品集合编号',
        'depot_id' => '仓库编号',
        'sort' => '排序',
        'status' => ' 状态',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', DepotRuleValidate::$alias['id']);
        // $validate->addColumn('app_code', DepotRuleValidate::$alias['app_code']);
        // $validate->addColumn('owner_id', DepotRuleValidate::$alias['owner_id']);
        // $validate->addColumn('store_ids', DepotRuleValidate::$alias['store_ids']);
        // $validate->addColumn('product_ids', DepotRuleValidate::$alias['product_ids']);
        // $validate->addColumn('depot_id', DepotRuleValidate::$alias['depot_id']);
        // $validate->addColumn('sort', DepotRuleValidate::$alias['sort']);
        // $validate->addColumn('status', DepotRuleValidate::$alias['status']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', DepotRuleValidate::$alias['id']);
        // $validate->addColumn('app_code', DepotRuleValidate::$alias['app_code']);
        // $validate->addColumn('owner_id', DepotRuleValidate::$alias['owner_id']);
        // $validate->addColumn('store_ids', DepotRuleValidate::$alias['store_ids']);
        // $validate->addColumn('product_ids', DepotRuleValidate::$alias['product_ids']);
        // $validate->addColumn('depot_id', DepotRuleValidate::$alias['depot_id']);
        // $validate->addColumn('sort', DepotRuleValidate::$alias['sort']);
        // $validate->addColumn('status', DepotRuleValidate::$alias['status']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', DepotRuleValidate::$alias['id']);
        // $validate->addColumn('app_code', DepotRuleValidate::$alias['app_code']);
        // $validate->addColumn('owner_id', DepotRuleValidate::$alias['owner_id']);
        // $validate->addColumn('store_ids', DepotRuleValidate::$alias['store_ids']);
        // $validate->addColumn('product_ids', DepotRuleValidate::$alias['product_ids']);
        // $validate->addColumn('depot_id', DepotRuleValidate::$alias['depot_id']);
        // $validate->addColumn('sort', DepotRuleValidate::$alias['sort']);
        // $validate->addColumn('status', DepotRuleValidate::$alias['status']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', DepotRuleValidate::$alias['id']);
        // $validate->addColumn('app_code', DepotRuleValidate::$alias['app_code']);
        // $validate->addColumn('owner_id', DepotRuleValidate::$alias['owner_id']);
        // $validate->addColumn('store_ids', DepotRuleValidate::$alias['store_ids']);
        // $validate->addColumn('product_ids', DepotRuleValidate::$alias['product_ids']);
        // $validate->addColumn('depot_id', DepotRuleValidate::$alias['depot_id']);
        // $validate->addColumn('sort', DepotRuleValidate::$alias['sort']);
        // $validate->addColumn('status', DepotRuleValidate::$alias['status']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', DepotRuleValidate::$alias['id']);
        // $validate->addColumn('app_code', DepotRuleValidate::$alias['app_code']);
        // $validate->addColumn('owner_id', DepotRuleValidate::$alias['owner_id']);
        // $validate->addColumn('store_ids', DepotRuleValidate::$alias['store_ids']);
        // $validate->addColumn('product_ids', DepotRuleValidate::$alias['product_ids']);
        // $validate->addColumn('depot_id', DepotRuleValidate::$alias['depot_id']);
        // $validate->addColumn('sort', DepotRuleValidate::$alias['sort']);
        // $validate->addColumn('status', DepotRuleValidate::$alias['status']);
        
        return $validate;
    }
}
