<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class DepotValidate
{
    protected static $alias = [
        'id' => '',
        'code' => '唯一编码',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'name' => '仓库全称',
        'short_name' => '仓库简称',
        'price_flg' => '是否结算费用',
        'type' => '仓库类型',
        'level' => '',
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
        'sort' => '排序，支持小数，数字越大越靠前',
        'create_user_name' => '创建人用户名',
        'create_user_code' => '创建人code',
        'create_time' => '创建时间',
        'update_time' => '最后更新时间',
        'remark' => '备注',
        'delete_flg' => '是否删除',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', DepotValidate::$alias['id']);
        // $validate->addColumn('code', DepotValidate::$alias['code']);
        // $validate->addColumn('app_code', DepotValidate::$alias['app_code']);
        // $validate->addColumn('name', DepotValidate::$alias['name']);
        // $validate->addColumn('short_name', DepotValidate::$alias['short_name']);
        // $validate->addColumn('price_flg', DepotValidate::$alias['price_flg']);
        // $validate->addColumn('type', DepotValidate::$alias['type']);
        // $validate->addColumn('level', DepotValidate::$alias['level']);
        // $validate->addColumn('pathid', DepotValidate::$alias['pathid']);
        // $validate->addColumn('province', DepotValidate::$alias['province']);
        // $validate->addColumn('city', DepotValidate::$alias['city']);
        // $validate->addColumn('district', DepotValidate::$alias['district']);
        // $validate->addColumn('complete_address', DepotValidate::$alias['complete_address']);
        // $validate->addColumn('contact_name_1', DepotValidate::$alias['contact_name_1']);
        // $validate->addColumn('contact_mobile_1', DepotValidate::$alias['contact_mobile_1']);
        // $validate->addColumn('contact_name_2', DepotValidate::$alias['contact_name_2']);
        // $validate->addColumn('contact_mobile_2', DepotValidate::$alias['contact_mobile_2']);
        // $validate->addColumn('amap_adcode', DepotValidate::$alias['amap_adcode']);
        // $validate->addColumn('amap_lng', DepotValidate::$alias['amap_lng']);
        // $validate->addColumn('amap_lat', DepotValidate::$alias['amap_lat']);
        // $validate->addColumn('sort', DepotValidate::$alias['sort']);
        // $validate->addColumn('create_user_name', DepotValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', DepotValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', DepotValidate::$alias['create_time']);
        // $validate->addColumn('update_time', DepotValidate::$alias['update_time']);
        // $validate->addColumn('remark', DepotValidate::$alias['remark']);
        // $validate->addColumn('delete_flg', DepotValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', DepotValidate::$alias['id']);
        // $validate->addColumn('code', DepotValidate::$alias['code']);
        // $validate->addColumn('app_code', DepotValidate::$alias['app_code']);
        // $validate->addColumn('name', DepotValidate::$alias['name']);
        // $validate->addColumn('short_name', DepotValidate::$alias['short_name']);
        // $validate->addColumn('price_flg', DepotValidate::$alias['price_flg']);
        // $validate->addColumn('type', DepotValidate::$alias['type']);
        // $validate->addColumn('level', DepotValidate::$alias['level']);
        // $validate->addColumn('pathid', DepotValidate::$alias['pathid']);
        // $validate->addColumn('province', DepotValidate::$alias['province']);
        // $validate->addColumn('city', DepotValidate::$alias['city']);
        // $validate->addColumn('district', DepotValidate::$alias['district']);
        // $validate->addColumn('complete_address', DepotValidate::$alias['complete_address']);
        // $validate->addColumn('contact_name_1', DepotValidate::$alias['contact_name_1']);
        // $validate->addColumn('contact_mobile_1', DepotValidate::$alias['contact_mobile_1']);
        // $validate->addColumn('contact_name_2', DepotValidate::$alias['contact_name_2']);
        // $validate->addColumn('contact_mobile_2', DepotValidate::$alias['contact_mobile_2']);
        // $validate->addColumn('amap_adcode', DepotValidate::$alias['amap_adcode']);
        // $validate->addColumn('amap_lng', DepotValidate::$alias['amap_lng']);
        // $validate->addColumn('amap_lat', DepotValidate::$alias['amap_lat']);
        // $validate->addColumn('sort', DepotValidate::$alias['sort']);
        // $validate->addColumn('create_user_name', DepotValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', DepotValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', DepotValidate::$alias['create_time']);
        // $validate->addColumn('update_time', DepotValidate::$alias['update_time']);
        // $validate->addColumn('remark', DepotValidate::$alias['remark']);
        // $validate->addColumn('delete_flg', DepotValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', DepotValidate::$alias['id']);
        // $validate->addColumn('code', DepotValidate::$alias['code']);
        // $validate->addColumn('app_code', DepotValidate::$alias['app_code']);
        // $validate->addColumn('name', DepotValidate::$alias['name']);
        // $validate->addColumn('short_name', DepotValidate::$alias['short_name']);
        // $validate->addColumn('price_flg', DepotValidate::$alias['price_flg']);
        // $validate->addColumn('type', DepotValidate::$alias['type']);
        // $validate->addColumn('level', DepotValidate::$alias['level']);
        // $validate->addColumn('pathid', DepotValidate::$alias['pathid']);
        // $validate->addColumn('province', DepotValidate::$alias['province']);
        // $validate->addColumn('city', DepotValidate::$alias['city']);
        // $validate->addColumn('district', DepotValidate::$alias['district']);
        // $validate->addColumn('complete_address', DepotValidate::$alias['complete_address']);
        // $validate->addColumn('contact_name_1', DepotValidate::$alias['contact_name_1']);
        // $validate->addColumn('contact_mobile_1', DepotValidate::$alias['contact_mobile_1']);
        // $validate->addColumn('contact_name_2', DepotValidate::$alias['contact_name_2']);
        // $validate->addColumn('contact_mobile_2', DepotValidate::$alias['contact_mobile_2']);
        // $validate->addColumn('amap_adcode', DepotValidate::$alias['amap_adcode']);
        // $validate->addColumn('amap_lng', DepotValidate::$alias['amap_lng']);
        // $validate->addColumn('amap_lat', DepotValidate::$alias['amap_lat']);
        // $validate->addColumn('sort', DepotValidate::$alias['sort']);
        // $validate->addColumn('create_user_name', DepotValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', DepotValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', DepotValidate::$alias['create_time']);
        // $validate->addColumn('update_time', DepotValidate::$alias['update_time']);
        // $validate->addColumn('remark', DepotValidate::$alias['remark']);
        // $validate->addColumn('delete_flg', DepotValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', DepotValidate::$alias['id']);
        // $validate->addColumn('code', DepotValidate::$alias['code']);
        // $validate->addColumn('app_code', DepotValidate::$alias['app_code']);
        // $validate->addColumn('name', DepotValidate::$alias['name']);
        // $validate->addColumn('short_name', DepotValidate::$alias['short_name']);
        // $validate->addColumn('price_flg', DepotValidate::$alias['price_flg']);
        // $validate->addColumn('type', DepotValidate::$alias['type']);
        // $validate->addColumn('level', DepotValidate::$alias['level']);
        // $validate->addColumn('pathid', DepotValidate::$alias['pathid']);
        // $validate->addColumn('province', DepotValidate::$alias['province']);
        // $validate->addColumn('city', DepotValidate::$alias['city']);
        // $validate->addColumn('district', DepotValidate::$alias['district']);
        // $validate->addColumn('complete_address', DepotValidate::$alias['complete_address']);
        // $validate->addColumn('contact_name_1', DepotValidate::$alias['contact_name_1']);
        // $validate->addColumn('contact_mobile_1', DepotValidate::$alias['contact_mobile_1']);
        // $validate->addColumn('contact_name_2', DepotValidate::$alias['contact_name_2']);
        // $validate->addColumn('contact_mobile_2', DepotValidate::$alias['contact_mobile_2']);
        // $validate->addColumn('amap_adcode', DepotValidate::$alias['amap_adcode']);
        // $validate->addColumn('amap_lng', DepotValidate::$alias['amap_lng']);
        // $validate->addColumn('amap_lat', DepotValidate::$alias['amap_lat']);
        // $validate->addColumn('sort', DepotValidate::$alias['sort']);
        // $validate->addColumn('create_user_name', DepotValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', DepotValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', DepotValidate::$alias['create_time']);
        // $validate->addColumn('update_time', DepotValidate::$alias['update_time']);
        // $validate->addColumn('remark', DepotValidate::$alias['remark']);
        // $validate->addColumn('delete_flg', DepotValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', DepotValidate::$alias['id']);
        // $validate->addColumn('code', DepotValidate::$alias['code']);
        // $validate->addColumn('app_code', DepotValidate::$alias['app_code']);
        // $validate->addColumn('name', DepotValidate::$alias['name']);
        // $validate->addColumn('short_name', DepotValidate::$alias['short_name']);
        // $validate->addColumn('price_flg', DepotValidate::$alias['price_flg']);
        // $validate->addColumn('type', DepotValidate::$alias['type']);
        // $validate->addColumn('level', DepotValidate::$alias['level']);
        // $validate->addColumn('pathid', DepotValidate::$alias['pathid']);
        // $validate->addColumn('province', DepotValidate::$alias['province']);
        // $validate->addColumn('city', DepotValidate::$alias['city']);
        // $validate->addColumn('district', DepotValidate::$alias['district']);
        // $validate->addColumn('complete_address', DepotValidate::$alias['complete_address']);
        // $validate->addColumn('contact_name_1', DepotValidate::$alias['contact_name_1']);
        // $validate->addColumn('contact_mobile_1', DepotValidate::$alias['contact_mobile_1']);
        // $validate->addColumn('contact_name_2', DepotValidate::$alias['contact_name_2']);
        // $validate->addColumn('contact_mobile_2', DepotValidate::$alias['contact_mobile_2']);
        // $validate->addColumn('amap_adcode', DepotValidate::$alias['amap_adcode']);
        // $validate->addColumn('amap_lng', DepotValidate::$alias['amap_lng']);
        // $validate->addColumn('amap_lat', DepotValidate::$alias['amap_lat']);
        // $validate->addColumn('sort', DepotValidate::$alias['sort']);
        // $validate->addColumn('create_user_name', DepotValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', DepotValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', DepotValidate::$alias['create_time']);
        // $validate->addColumn('update_time', DepotValidate::$alias['update_time']);
        // $validate->addColumn('remark', DepotValidate::$alias['remark']);
        // $validate->addColumn('delete_flg', DepotValidate::$alias['delete_flg']);
        
        return $validate;
    }
}
