<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class StoreDepotValidate
{
    protected static $alias = [
        'id' => '',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'store_id' => '门店编号',
        'depot_id' => '仓库编号',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', StoreDepotValidate::$alias['id']);
        // $validate->addColumn('app_code', StoreDepotValidate::$alias['app_code']);
        // $validate->addColumn('store_id', StoreDepotValidate::$alias['store_id']);
        // $validate->addColumn('depot_id', StoreDepotValidate::$alias['depot_id']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', StoreDepotValidate::$alias['id']);
        // $validate->addColumn('app_code', StoreDepotValidate::$alias['app_code']);
        // $validate->addColumn('store_id', StoreDepotValidate::$alias['store_id']);
        // $validate->addColumn('depot_id', StoreDepotValidate::$alias['depot_id']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', StoreDepotValidate::$alias['id']);
        // $validate->addColumn('app_code', StoreDepotValidate::$alias['app_code']);
        // $validate->addColumn('store_id', StoreDepotValidate::$alias['store_id']);
        // $validate->addColumn('depot_id', StoreDepotValidate::$alias['depot_id']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', StoreDepotValidate::$alias['id']);
        // $validate->addColumn('app_code', StoreDepotValidate::$alias['app_code']);
        // $validate->addColumn('store_id', StoreDepotValidate::$alias['store_id']);
        // $validate->addColumn('depot_id', StoreDepotValidate::$alias['depot_id']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', StoreDepotValidate::$alias['id']);
        // $validate->addColumn('app_code', StoreDepotValidate::$alias['app_code']);
        // $validate->addColumn('store_id', StoreDepotValidate::$alias['store_id']);
        // $validate->addColumn('depot_id', StoreDepotValidate::$alias['depot_id']);
        
        return $validate;
    }
}
