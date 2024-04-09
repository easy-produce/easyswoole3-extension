<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class ProductUnitNameValidate
{
    protected static $alias = [
        'id' => '',
        'code' => '唯一编码',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'name' => '单位',
        'weigh_flg' => '秤重标识',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductUnitNameValidate::$alias['id']);
        // $validate->addColumn('code', ProductUnitNameValidate::$alias['code']);
        // $validate->addColumn('app_code', ProductUnitNameValidate::$alias['app_code']);
        // $validate->addColumn('name', ProductUnitNameValidate::$alias['name']);
        // $validate->addColumn('weigh_flg', ProductUnitNameValidate::$alias['weigh_flg']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductUnitNameValidate::$alias['id']);
        // $validate->addColumn('code', ProductUnitNameValidate::$alias['code']);
        // $validate->addColumn('app_code', ProductUnitNameValidate::$alias['app_code']);
        // $validate->addColumn('name', ProductUnitNameValidate::$alias['name']);
        // $validate->addColumn('weigh_flg', ProductUnitNameValidate::$alias['weigh_flg']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductUnitNameValidate::$alias['id']);
        // $validate->addColumn('code', ProductUnitNameValidate::$alias['code']);
        // $validate->addColumn('app_code', ProductUnitNameValidate::$alias['app_code']);
        // $validate->addColumn('name', ProductUnitNameValidate::$alias['name']);
        // $validate->addColumn('weigh_flg', ProductUnitNameValidate::$alias['weigh_flg']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductUnitNameValidate::$alias['id']);
        // $validate->addColumn('code', ProductUnitNameValidate::$alias['code']);
        // $validate->addColumn('app_code', ProductUnitNameValidate::$alias['app_code']);
        // $validate->addColumn('name', ProductUnitNameValidate::$alias['name']);
        // $validate->addColumn('weigh_flg', ProductUnitNameValidate::$alias['weigh_flg']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductUnitNameValidate::$alias['id']);
        // $validate->addColumn('code', ProductUnitNameValidate::$alias['code']);
        // $validate->addColumn('app_code', ProductUnitNameValidate::$alias['app_code']);
        // $validate->addColumn('name', ProductUnitNameValidate::$alias['name']);
        // $validate->addColumn('weigh_flg', ProductUnitNameValidate::$alias['weigh_flg']);
        
        return $validate;
    }
}
