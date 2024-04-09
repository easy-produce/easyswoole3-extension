<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class ProductUnitValidate
{
    protected static $alias = [
        'id' => '',
        'code' => '唯一编码',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'product_code' => '产品编号',
        'owner_code' => '货主编码',
        'third_code' => '第三方产品规格id',
        'per_unit' => '单位转换率',
        'unit_name' => '单位',
        'guige' => '规格',
        'status' => '状态',
        'grossweight' => '毛重kg',
        'netweight' => '净重kg',
        'length' => '长（厘米）',
        'width' => '宽（厘米）',
        'height' => '高（厘米）',
        'cubage' => '体积（立方厘米）',
        'price' => '价格',
        'minimum' => '最小起订量',
        'minimum_type' => '起订量类型 ',
        'delete_flg' => '删除',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductUnitValidate::$alias['id']);
        // $validate->addColumn('code', ProductUnitValidate::$alias['code']);
        // $validate->addColumn('app_code', ProductUnitValidate::$alias['app_code']);
        // $validate->addColumn('product_code', ProductUnitValidate::$alias['product_code']);
        // $validate->addColumn('owner_code', ProductUnitValidate::$alias['owner_code']);
        // $validate->addColumn('third_code', ProductUnitValidate::$alias['third_code']);
        // $validate->addColumn('per_unit', ProductUnitValidate::$alias['per_unit']);
        // $validate->addColumn('unit_name', ProductUnitValidate::$alias['unit_name']);
        // $validate->addColumn('guige', ProductUnitValidate::$alias['guige']);
        // $validate->addColumn('status', ProductUnitValidate::$alias['status']);
        // $validate->addColumn('grossweight', ProductUnitValidate::$alias['grossweight']);
        // $validate->addColumn('netweight', ProductUnitValidate::$alias['netweight']);
        // $validate->addColumn('length', ProductUnitValidate::$alias['length']);
        // $validate->addColumn('width', ProductUnitValidate::$alias['width']);
        // $validate->addColumn('height', ProductUnitValidate::$alias['height']);
        // $validate->addColumn('cubage', ProductUnitValidate::$alias['cubage']);
        // $validate->addColumn('price', ProductUnitValidate::$alias['price']);
        // $validate->addColumn('minimum', ProductUnitValidate::$alias['minimum']);
        // $validate->addColumn('minimum_type', ProductUnitValidate::$alias['minimum_type']);
        // $validate->addColumn('delete_flg', ProductUnitValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductUnitValidate::$alias['id']);
        // $validate->addColumn('code', ProductUnitValidate::$alias['code']);
        // $validate->addColumn('app_code', ProductUnitValidate::$alias['app_code']);
        // $validate->addColumn('product_code', ProductUnitValidate::$alias['product_code']);
        // $validate->addColumn('owner_code', ProductUnitValidate::$alias['owner_code']);
        // $validate->addColumn('third_code', ProductUnitValidate::$alias['third_code']);
        // $validate->addColumn('per_unit', ProductUnitValidate::$alias['per_unit']);
        // $validate->addColumn('unit_name', ProductUnitValidate::$alias['unit_name']);
        // $validate->addColumn('guige', ProductUnitValidate::$alias['guige']);
        // $validate->addColumn('status', ProductUnitValidate::$alias['status']);
        // $validate->addColumn('grossweight', ProductUnitValidate::$alias['grossweight']);
        // $validate->addColumn('netweight', ProductUnitValidate::$alias['netweight']);
        // $validate->addColumn('length', ProductUnitValidate::$alias['length']);
        // $validate->addColumn('width', ProductUnitValidate::$alias['width']);
        // $validate->addColumn('height', ProductUnitValidate::$alias['height']);
        // $validate->addColumn('cubage', ProductUnitValidate::$alias['cubage']);
        // $validate->addColumn('price', ProductUnitValidate::$alias['price']);
        // $validate->addColumn('minimum', ProductUnitValidate::$alias['minimum']);
        // $validate->addColumn('minimum_type', ProductUnitValidate::$alias['minimum_type']);
        // $validate->addColumn('delete_flg', ProductUnitValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductUnitValidate::$alias['id']);
        // $validate->addColumn('code', ProductUnitValidate::$alias['code']);
        // $validate->addColumn('app_code', ProductUnitValidate::$alias['app_code']);
        // $validate->addColumn('product_code', ProductUnitValidate::$alias['product_code']);
        // $validate->addColumn('owner_code', ProductUnitValidate::$alias['owner_code']);
        // $validate->addColumn('third_code', ProductUnitValidate::$alias['third_code']);
        // $validate->addColumn('per_unit', ProductUnitValidate::$alias['per_unit']);
        // $validate->addColumn('unit_name', ProductUnitValidate::$alias['unit_name']);
        // $validate->addColumn('guige', ProductUnitValidate::$alias['guige']);
        // $validate->addColumn('status', ProductUnitValidate::$alias['status']);
        // $validate->addColumn('grossweight', ProductUnitValidate::$alias['grossweight']);
        // $validate->addColumn('netweight', ProductUnitValidate::$alias['netweight']);
        // $validate->addColumn('length', ProductUnitValidate::$alias['length']);
        // $validate->addColumn('width', ProductUnitValidate::$alias['width']);
        // $validate->addColumn('height', ProductUnitValidate::$alias['height']);
        // $validate->addColumn('cubage', ProductUnitValidate::$alias['cubage']);
        // $validate->addColumn('price', ProductUnitValidate::$alias['price']);
        // $validate->addColumn('minimum', ProductUnitValidate::$alias['minimum']);
        // $validate->addColumn('minimum_type', ProductUnitValidate::$alias['minimum_type']);
        // $validate->addColumn('delete_flg', ProductUnitValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductUnitValidate::$alias['id']);
        // $validate->addColumn('code', ProductUnitValidate::$alias['code']);
        // $validate->addColumn('app_code', ProductUnitValidate::$alias['app_code']);
        // $validate->addColumn('product_code', ProductUnitValidate::$alias['product_code']);
        // $validate->addColumn('owner_code', ProductUnitValidate::$alias['owner_code']);
        // $validate->addColumn('third_code', ProductUnitValidate::$alias['third_code']);
        // $validate->addColumn('per_unit', ProductUnitValidate::$alias['per_unit']);
        // $validate->addColumn('unit_name', ProductUnitValidate::$alias['unit_name']);
        // $validate->addColumn('guige', ProductUnitValidate::$alias['guige']);
        // $validate->addColumn('status', ProductUnitValidate::$alias['status']);
        // $validate->addColumn('grossweight', ProductUnitValidate::$alias['grossweight']);
        // $validate->addColumn('netweight', ProductUnitValidate::$alias['netweight']);
        // $validate->addColumn('length', ProductUnitValidate::$alias['length']);
        // $validate->addColumn('width', ProductUnitValidate::$alias['width']);
        // $validate->addColumn('height', ProductUnitValidate::$alias['height']);
        // $validate->addColumn('cubage', ProductUnitValidate::$alias['cubage']);
        // $validate->addColumn('price', ProductUnitValidate::$alias['price']);
        // $validate->addColumn('minimum', ProductUnitValidate::$alias['minimum']);
        // $validate->addColumn('minimum_type', ProductUnitValidate::$alias['minimum_type']);
        // $validate->addColumn('delete_flg', ProductUnitValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductUnitValidate::$alias['id']);
        // $validate->addColumn('code', ProductUnitValidate::$alias['code']);
        // $validate->addColumn('app_code', ProductUnitValidate::$alias['app_code']);
        // $validate->addColumn('product_code', ProductUnitValidate::$alias['product_code']);
        // $validate->addColumn('owner_code', ProductUnitValidate::$alias['owner_code']);
        // $validate->addColumn('third_code', ProductUnitValidate::$alias['third_code']);
        // $validate->addColumn('per_unit', ProductUnitValidate::$alias['per_unit']);
        // $validate->addColumn('unit_name', ProductUnitValidate::$alias['unit_name']);
        // $validate->addColumn('guige', ProductUnitValidate::$alias['guige']);
        // $validate->addColumn('status', ProductUnitValidate::$alias['status']);
        // $validate->addColumn('grossweight', ProductUnitValidate::$alias['grossweight']);
        // $validate->addColumn('netweight', ProductUnitValidate::$alias['netweight']);
        // $validate->addColumn('length', ProductUnitValidate::$alias['length']);
        // $validate->addColumn('width', ProductUnitValidate::$alias['width']);
        // $validate->addColumn('height', ProductUnitValidate::$alias['height']);
        // $validate->addColumn('cubage', ProductUnitValidate::$alias['cubage']);
        // $validate->addColumn('price', ProductUnitValidate::$alias['price']);
        // $validate->addColumn('minimum', ProductUnitValidate::$alias['minimum']);
        // $validate->addColumn('minimum_type', ProductUnitValidate::$alias['minimum_type']);
        // $validate->addColumn('delete_flg', ProductUnitValidate::$alias['delete_flg']);
        
        return $validate;
    }
}
