<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class CarModelValidate
{
    protected static $alias = [
        'id' => '',
        'code' => '唯一编码',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'name' => '车型名称',
        'expect_number' => '预计发车件数',
        'lenght' => '车辆长度',
        'height' => '车辆高度',
        'width' => '车辆宽度',
        'max_volume' => '车辆容积',
        'max_weight' => '车辆载重',
        'create_time' => '创建时间',
        'delete_flg' => '删除',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', CarModelValidate::$alias['id']);
        // $validate->addColumn('code', CarModelValidate::$alias['code']);
        // $validate->addColumn('app_code', CarModelValidate::$alias['app_code']);
        // $validate->addColumn('name', CarModelValidate::$alias['name']);
        // $validate->addColumn('expect_number', CarModelValidate::$alias['expect_number']);
        // $validate->addColumn('lenght', CarModelValidate::$alias['lenght']);
        // $validate->addColumn('height', CarModelValidate::$alias['height']);
        // $validate->addColumn('width', CarModelValidate::$alias['width']);
        // $validate->addColumn('max_volume', CarModelValidate::$alias['max_volume']);
        // $validate->addColumn('max_weight', CarModelValidate::$alias['max_weight']);
        // $validate->addColumn('create_time', CarModelValidate::$alias['create_time']);
        // $validate->addColumn('delete_flg', CarModelValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', CarModelValidate::$alias['id']);
        // $validate->addColumn('code', CarModelValidate::$alias['code']);
        // $validate->addColumn('app_code', CarModelValidate::$alias['app_code']);
        // $validate->addColumn('name', CarModelValidate::$alias['name']);
        // $validate->addColumn('expect_number', CarModelValidate::$alias['expect_number']);
        // $validate->addColumn('lenght', CarModelValidate::$alias['lenght']);
        // $validate->addColumn('height', CarModelValidate::$alias['height']);
        // $validate->addColumn('width', CarModelValidate::$alias['width']);
        // $validate->addColumn('max_volume', CarModelValidate::$alias['max_volume']);
        // $validate->addColumn('max_weight', CarModelValidate::$alias['max_weight']);
        // $validate->addColumn('create_time', CarModelValidate::$alias['create_time']);
        // $validate->addColumn('delete_flg', CarModelValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', CarModelValidate::$alias['id']);
        // $validate->addColumn('code', CarModelValidate::$alias['code']);
        // $validate->addColumn('app_code', CarModelValidate::$alias['app_code']);
        // $validate->addColumn('name', CarModelValidate::$alias['name']);
        // $validate->addColumn('expect_number', CarModelValidate::$alias['expect_number']);
        // $validate->addColumn('lenght', CarModelValidate::$alias['lenght']);
        // $validate->addColumn('height', CarModelValidate::$alias['height']);
        // $validate->addColumn('width', CarModelValidate::$alias['width']);
        // $validate->addColumn('max_volume', CarModelValidate::$alias['max_volume']);
        // $validate->addColumn('max_weight', CarModelValidate::$alias['max_weight']);
        // $validate->addColumn('create_time', CarModelValidate::$alias['create_time']);
        // $validate->addColumn('delete_flg', CarModelValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', CarModelValidate::$alias['id']);
        // $validate->addColumn('code', CarModelValidate::$alias['code']);
        // $validate->addColumn('app_code', CarModelValidate::$alias['app_code']);
        // $validate->addColumn('name', CarModelValidate::$alias['name']);
        // $validate->addColumn('expect_number', CarModelValidate::$alias['expect_number']);
        // $validate->addColumn('lenght', CarModelValidate::$alias['lenght']);
        // $validate->addColumn('height', CarModelValidate::$alias['height']);
        // $validate->addColumn('width', CarModelValidate::$alias['width']);
        // $validate->addColumn('max_volume', CarModelValidate::$alias['max_volume']);
        // $validate->addColumn('max_weight', CarModelValidate::$alias['max_weight']);
        // $validate->addColumn('create_time', CarModelValidate::$alias['create_time']);
        // $validate->addColumn('delete_flg', CarModelValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', CarModelValidate::$alias['id']);
        // $validate->addColumn('code', CarModelValidate::$alias['code']);
        // $validate->addColumn('app_code', CarModelValidate::$alias['app_code']);
        // $validate->addColumn('name', CarModelValidate::$alias['name']);
        // $validate->addColumn('expect_number', CarModelValidate::$alias['expect_number']);
        // $validate->addColumn('lenght', CarModelValidate::$alias['lenght']);
        // $validate->addColumn('height', CarModelValidate::$alias['height']);
        // $validate->addColumn('width', CarModelValidate::$alias['width']);
        // $validate->addColumn('max_volume', CarModelValidate::$alias['max_volume']);
        // $validate->addColumn('max_weight', CarModelValidate::$alias['max_weight']);
        // $validate->addColumn('create_time', CarModelValidate::$alias['create_time']);
        // $validate->addColumn('delete_flg', CarModelValidate::$alias['delete_flg']);
        
        return $validate;
    }
}
