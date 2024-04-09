<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class OwnerAddressValidate
{
    protected static $alias = [
        'id' => '',
        'owner_code' => '货主code',
        'depot_code' => '仓库code',
        'name' => '地址名称',
        'short_name' => '地址简称',
        'pathid' => '原始地区编码',
        'province' => '省',
        'city' => '市',
        'district' => '区',
        'complete_address' => '详细地址',
        'contact_name_1' => '联系人',
        'contact_mobile_1' => '联系人电话',
        'contact_name_2' => '备用联系人',
        'contact_mobile_2' => '备用联系人电话',
        'amap_adcode' => '高德adcode',
        'amap_lng' => '高德经度',
        'amap_lat' => '高德纬度',
        'delete_flg' => '是否删除',
        'create_time' => '创建时间',
        'update_time' => '最后更新时间',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OwnerAddressValidate::$alias['id']);
        // $validate->addColumn('owner_code', OwnerAddressValidate::$alias['owner_code']);
        // $validate->addColumn('depot_code', OwnerAddressValidate::$alias['depot_code']);
        // $validate->addColumn('name', OwnerAddressValidate::$alias['name']);
        // $validate->addColumn('short_name', OwnerAddressValidate::$alias['short_name']);
        // $validate->addColumn('pathid', OwnerAddressValidate::$alias['pathid']);
        // $validate->addColumn('province', OwnerAddressValidate::$alias['province']);
        // $validate->addColumn('city', OwnerAddressValidate::$alias['city']);
        // $validate->addColumn('district', OwnerAddressValidate::$alias['district']);
        // $validate->addColumn('complete_address', OwnerAddressValidate::$alias['complete_address']);
        // $validate->addColumn('contact_name_1', OwnerAddressValidate::$alias['contact_name_1']);
        // $validate->addColumn('contact_mobile_1', OwnerAddressValidate::$alias['contact_mobile_1']);
        // $validate->addColumn('contact_name_2', OwnerAddressValidate::$alias['contact_name_2']);
        // $validate->addColumn('contact_mobile_2', OwnerAddressValidate::$alias['contact_mobile_2']);
        // $validate->addColumn('amap_adcode', OwnerAddressValidate::$alias['amap_adcode']);
        // $validate->addColumn('amap_lng', OwnerAddressValidate::$alias['amap_lng']);
        // $validate->addColumn('amap_lat', OwnerAddressValidate::$alias['amap_lat']);
        // $validate->addColumn('delete_flg', OwnerAddressValidate::$alias['delete_flg']);
        // $validate->addColumn('create_time', OwnerAddressValidate::$alias['create_time']);
        // $validate->addColumn('update_time', OwnerAddressValidate::$alias['update_time']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OwnerAddressValidate::$alias['id']);
        // $validate->addColumn('owner_code', OwnerAddressValidate::$alias['owner_code']);
        // $validate->addColumn('depot_code', OwnerAddressValidate::$alias['depot_code']);
        // $validate->addColumn('name', OwnerAddressValidate::$alias['name']);
        // $validate->addColumn('short_name', OwnerAddressValidate::$alias['short_name']);
        // $validate->addColumn('pathid', OwnerAddressValidate::$alias['pathid']);
        // $validate->addColumn('province', OwnerAddressValidate::$alias['province']);
        // $validate->addColumn('city', OwnerAddressValidate::$alias['city']);
        // $validate->addColumn('district', OwnerAddressValidate::$alias['district']);
        // $validate->addColumn('complete_address', OwnerAddressValidate::$alias['complete_address']);
        // $validate->addColumn('contact_name_1', OwnerAddressValidate::$alias['contact_name_1']);
        // $validate->addColumn('contact_mobile_1', OwnerAddressValidate::$alias['contact_mobile_1']);
        // $validate->addColumn('contact_name_2', OwnerAddressValidate::$alias['contact_name_2']);
        // $validate->addColumn('contact_mobile_2', OwnerAddressValidate::$alias['contact_mobile_2']);
        // $validate->addColumn('amap_adcode', OwnerAddressValidate::$alias['amap_adcode']);
        // $validate->addColumn('amap_lng', OwnerAddressValidate::$alias['amap_lng']);
        // $validate->addColumn('amap_lat', OwnerAddressValidate::$alias['amap_lat']);
        // $validate->addColumn('delete_flg', OwnerAddressValidate::$alias['delete_flg']);
        // $validate->addColumn('create_time', OwnerAddressValidate::$alias['create_time']);
        // $validate->addColumn('update_time', OwnerAddressValidate::$alias['update_time']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OwnerAddressValidate::$alias['id']);
        // $validate->addColumn('owner_code', OwnerAddressValidate::$alias['owner_code']);
        // $validate->addColumn('depot_code', OwnerAddressValidate::$alias['depot_code']);
        // $validate->addColumn('name', OwnerAddressValidate::$alias['name']);
        // $validate->addColumn('short_name', OwnerAddressValidate::$alias['short_name']);
        // $validate->addColumn('pathid', OwnerAddressValidate::$alias['pathid']);
        // $validate->addColumn('province', OwnerAddressValidate::$alias['province']);
        // $validate->addColumn('city', OwnerAddressValidate::$alias['city']);
        // $validate->addColumn('district', OwnerAddressValidate::$alias['district']);
        // $validate->addColumn('complete_address', OwnerAddressValidate::$alias['complete_address']);
        // $validate->addColumn('contact_name_1', OwnerAddressValidate::$alias['contact_name_1']);
        // $validate->addColumn('contact_mobile_1', OwnerAddressValidate::$alias['contact_mobile_1']);
        // $validate->addColumn('contact_name_2', OwnerAddressValidate::$alias['contact_name_2']);
        // $validate->addColumn('contact_mobile_2', OwnerAddressValidate::$alias['contact_mobile_2']);
        // $validate->addColumn('amap_adcode', OwnerAddressValidate::$alias['amap_adcode']);
        // $validate->addColumn('amap_lng', OwnerAddressValidate::$alias['amap_lng']);
        // $validate->addColumn('amap_lat', OwnerAddressValidate::$alias['amap_lat']);
        // $validate->addColumn('delete_flg', OwnerAddressValidate::$alias['delete_flg']);
        // $validate->addColumn('create_time', OwnerAddressValidate::$alias['create_time']);
        // $validate->addColumn('update_time', OwnerAddressValidate::$alias['update_time']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OwnerAddressValidate::$alias['id']);
        // $validate->addColumn('owner_code', OwnerAddressValidate::$alias['owner_code']);
        // $validate->addColumn('depot_code', OwnerAddressValidate::$alias['depot_code']);
        // $validate->addColumn('name', OwnerAddressValidate::$alias['name']);
        // $validate->addColumn('short_name', OwnerAddressValidate::$alias['short_name']);
        // $validate->addColumn('pathid', OwnerAddressValidate::$alias['pathid']);
        // $validate->addColumn('province', OwnerAddressValidate::$alias['province']);
        // $validate->addColumn('city', OwnerAddressValidate::$alias['city']);
        // $validate->addColumn('district', OwnerAddressValidate::$alias['district']);
        // $validate->addColumn('complete_address', OwnerAddressValidate::$alias['complete_address']);
        // $validate->addColumn('contact_name_1', OwnerAddressValidate::$alias['contact_name_1']);
        // $validate->addColumn('contact_mobile_1', OwnerAddressValidate::$alias['contact_mobile_1']);
        // $validate->addColumn('contact_name_2', OwnerAddressValidate::$alias['contact_name_2']);
        // $validate->addColumn('contact_mobile_2', OwnerAddressValidate::$alias['contact_mobile_2']);
        // $validate->addColumn('amap_adcode', OwnerAddressValidate::$alias['amap_adcode']);
        // $validate->addColumn('amap_lng', OwnerAddressValidate::$alias['amap_lng']);
        // $validate->addColumn('amap_lat', OwnerAddressValidate::$alias['amap_lat']);
        // $validate->addColumn('delete_flg', OwnerAddressValidate::$alias['delete_flg']);
        // $validate->addColumn('create_time', OwnerAddressValidate::$alias['create_time']);
        // $validate->addColumn('update_time', OwnerAddressValidate::$alias['update_time']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OwnerAddressValidate::$alias['id']);
        // $validate->addColumn('owner_code', OwnerAddressValidate::$alias['owner_code']);
        // $validate->addColumn('depot_code', OwnerAddressValidate::$alias['depot_code']);
        // $validate->addColumn('name', OwnerAddressValidate::$alias['name']);
        // $validate->addColumn('short_name', OwnerAddressValidate::$alias['short_name']);
        // $validate->addColumn('pathid', OwnerAddressValidate::$alias['pathid']);
        // $validate->addColumn('province', OwnerAddressValidate::$alias['province']);
        // $validate->addColumn('city', OwnerAddressValidate::$alias['city']);
        // $validate->addColumn('district', OwnerAddressValidate::$alias['district']);
        // $validate->addColumn('complete_address', OwnerAddressValidate::$alias['complete_address']);
        // $validate->addColumn('contact_name_1', OwnerAddressValidate::$alias['contact_name_1']);
        // $validate->addColumn('contact_mobile_1', OwnerAddressValidate::$alias['contact_mobile_1']);
        // $validate->addColumn('contact_name_2', OwnerAddressValidate::$alias['contact_name_2']);
        // $validate->addColumn('contact_mobile_2', OwnerAddressValidate::$alias['contact_mobile_2']);
        // $validate->addColumn('amap_adcode', OwnerAddressValidate::$alias['amap_adcode']);
        // $validate->addColumn('amap_lng', OwnerAddressValidate::$alias['amap_lng']);
        // $validate->addColumn('amap_lat', OwnerAddressValidate::$alias['amap_lat']);
        // $validate->addColumn('delete_flg', OwnerAddressValidate::$alias['delete_flg']);
        // $validate->addColumn('create_time', OwnerAddressValidate::$alias['create_time']);
        // $validate->addColumn('update_time', OwnerAddressValidate::$alias['update_time']);
        
        return $validate;
    }
}
