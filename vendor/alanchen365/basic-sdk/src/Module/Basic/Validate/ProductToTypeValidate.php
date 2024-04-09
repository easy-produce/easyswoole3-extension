<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class ProductToTypeValidate
{
    protected static $alias = [
        'id' => '',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'product_code' => '产品编码',
        'product_type_code' => '类别编码',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductToTypeValidate::$alias['id']);
        // $validate->addColumn('app_code', ProductToTypeValidate::$alias['app_code']);
        // $validate->addColumn('product_code', ProductToTypeValidate::$alias['product_code']);
        // $validate->addColumn('product_type_code', ProductToTypeValidate::$alias['product_type_code']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductToTypeValidate::$alias['id']);
        // $validate->addColumn('app_code', ProductToTypeValidate::$alias['app_code']);
        // $validate->addColumn('product_code', ProductToTypeValidate::$alias['product_code']);
        // $validate->addColumn('product_type_code', ProductToTypeValidate::$alias['product_type_code']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductToTypeValidate::$alias['id']);
        // $validate->addColumn('app_code', ProductToTypeValidate::$alias['app_code']);
        // $validate->addColumn('product_code', ProductToTypeValidate::$alias['product_code']);
        // $validate->addColumn('product_type_code', ProductToTypeValidate::$alias['product_type_code']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductToTypeValidate::$alias['id']);
        // $validate->addColumn('app_code', ProductToTypeValidate::$alias['app_code']);
        // $validate->addColumn('product_code', ProductToTypeValidate::$alias['product_code']);
        // $validate->addColumn('product_type_code', ProductToTypeValidate::$alias['product_type_code']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductToTypeValidate::$alias['id']);
        // $validate->addColumn('app_code', ProductToTypeValidate::$alias['app_code']);
        // $validate->addColumn('product_code', ProductToTypeValidate::$alias['product_code']);
        // $validate->addColumn('product_type_code', ProductToTypeValidate::$alias['product_type_code']);
        
        return $validate;
    }
}
