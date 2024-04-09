<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class AreasValidate
{
    protected static $alias = [
        'id' => '',
        'pycode' => '拼音简码',
        'pathid' => '路径编号',
        'parent_id' => '上级地区编号',
        'area_name' => '地区名称',
        'zipcode' => '邮编',
        'adcode' => '线路编号',
        'amap' => '高德经纬度',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', AreasValidate::$alias['id']);
        // $validate->addColumn('pycode', AreasValidate::$alias['pycode']);
        // $validate->addColumn('pathid', AreasValidate::$alias['pathid']);
        // $validate->addColumn('parent_id', AreasValidate::$alias['parent_id']);
        // $validate->addColumn('area_name', AreasValidate::$alias['area_name']);
        // $validate->addColumn('zipcode', AreasValidate::$alias['zipcode']);
        // $validate->addColumn('adcode', AreasValidate::$alias['adcode']);
        // $validate->addColumn('amap', AreasValidate::$alias['amap']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', AreasValidate::$alias['id']);
        // $validate->addColumn('pycode', AreasValidate::$alias['pycode']);
        // $validate->addColumn('pathid', AreasValidate::$alias['pathid']);
        // $validate->addColumn('parent_id', AreasValidate::$alias['parent_id']);
        // $validate->addColumn('area_name', AreasValidate::$alias['area_name']);
        // $validate->addColumn('zipcode', AreasValidate::$alias['zipcode']);
        // $validate->addColumn('adcode', AreasValidate::$alias['adcode']);
        // $validate->addColumn('amap', AreasValidate::$alias['amap']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', AreasValidate::$alias['id']);
        // $validate->addColumn('pycode', AreasValidate::$alias['pycode']);
        // $validate->addColumn('pathid', AreasValidate::$alias['pathid']);
        // $validate->addColumn('parent_id', AreasValidate::$alias['parent_id']);
        // $validate->addColumn('area_name', AreasValidate::$alias['area_name']);
        // $validate->addColumn('zipcode', AreasValidate::$alias['zipcode']);
        // $validate->addColumn('adcode', AreasValidate::$alias['adcode']);
        // $validate->addColumn('amap', AreasValidate::$alias['amap']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', AreasValidate::$alias['id']);
        // $validate->addColumn('pycode', AreasValidate::$alias['pycode']);
        // $validate->addColumn('pathid', AreasValidate::$alias['pathid']);
        // $validate->addColumn('parent_id', AreasValidate::$alias['parent_id']);
        // $validate->addColumn('area_name', AreasValidate::$alias['area_name']);
        // $validate->addColumn('zipcode', AreasValidate::$alias['zipcode']);
        // $validate->addColumn('adcode', AreasValidate::$alias['adcode']);
        // $validate->addColumn('amap', AreasValidate::$alias['amap']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', AreasValidate::$alias['id']);
        // $validate->addColumn('pycode', AreasValidate::$alias['pycode']);
        // $validate->addColumn('pathid', AreasValidate::$alias['pathid']);
        // $validate->addColumn('parent_id', AreasValidate::$alias['parent_id']);
        // $validate->addColumn('area_name', AreasValidate::$alias['area_name']);
        // $validate->addColumn('zipcode', AreasValidate::$alias['zipcode']);
        // $validate->addColumn('adcode', AreasValidate::$alias['adcode']);
        // $validate->addColumn('amap', AreasValidate::$alias['amap']);
        
        return $validate;
    }
}
