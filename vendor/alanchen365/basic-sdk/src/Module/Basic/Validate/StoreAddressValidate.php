<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class StoreAddressValidate
{
    protected static $alias = [
        'id' => '',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'store_id' => '门店编号',
        'name' => '地址名称',
        'contact' => '联系人',
        'position' => '职务',
        'mobile' => '手机',
        'pathid' => '区域编号',
        'province' => '省',
        'city' => '市',
        'district' => '区',
        'street' => '街道',
        'address' => '详细地址',
        'amap' => '高德经纬度',
        'remark' => '备注',
        'is_default' => '是否是默认收发货人 默认为0非默认 1为默认',
        'sort' => '排序',
        'create_user_name' => '创建人用户名',
        'create_user_code' => '创建人code',
        'create_time' => '创建时间',
        'update_time' => '最后更新时间',
        'delete_flg' => '是否删除',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', StoreAddressValidate::$alias['id']);
        // $validate->addColumn('app_code', StoreAddressValidate::$alias['app_code']);
        // $validate->addColumn('store_id', StoreAddressValidate::$alias['store_id']);
        // $validate->addColumn('name', StoreAddressValidate::$alias['name']);
        // $validate->addColumn('contact', StoreAddressValidate::$alias['contact']);
        // $validate->addColumn('position', StoreAddressValidate::$alias['position']);
        // $validate->addColumn('mobile', StoreAddressValidate::$alias['mobile']);
        // $validate->addColumn('pathid', StoreAddressValidate::$alias['pathid']);
        // $validate->addColumn('province', StoreAddressValidate::$alias['province']);
        // $validate->addColumn('city', StoreAddressValidate::$alias['city']);
        // $validate->addColumn('district', StoreAddressValidate::$alias['district']);
        // $validate->addColumn('street', StoreAddressValidate::$alias['street']);
        // $validate->addColumn('address', StoreAddressValidate::$alias['address']);
        // $validate->addColumn('amap', StoreAddressValidate::$alias['amap']);
        // $validate->addColumn('remark', StoreAddressValidate::$alias['remark']);
        // $validate->addColumn('is_default', StoreAddressValidate::$alias['is_default']);
        // $validate->addColumn('sort', StoreAddressValidate::$alias['sort']);
        // $validate->addColumn('create_user_name', StoreAddressValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', StoreAddressValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', StoreAddressValidate::$alias['create_time']);
        // $validate->addColumn('update_time', StoreAddressValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', StoreAddressValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', StoreAddressValidate::$alias['id']);
        // $validate->addColumn('app_code', StoreAddressValidate::$alias['app_code']);
        // $validate->addColumn('store_id', StoreAddressValidate::$alias['store_id']);
        // $validate->addColumn('name', StoreAddressValidate::$alias['name']);
        // $validate->addColumn('contact', StoreAddressValidate::$alias['contact']);
        // $validate->addColumn('position', StoreAddressValidate::$alias['position']);
        // $validate->addColumn('mobile', StoreAddressValidate::$alias['mobile']);
        // $validate->addColumn('pathid', StoreAddressValidate::$alias['pathid']);
        // $validate->addColumn('province', StoreAddressValidate::$alias['province']);
        // $validate->addColumn('city', StoreAddressValidate::$alias['city']);
        // $validate->addColumn('district', StoreAddressValidate::$alias['district']);
        // $validate->addColumn('street', StoreAddressValidate::$alias['street']);
        // $validate->addColumn('address', StoreAddressValidate::$alias['address']);
        // $validate->addColumn('amap', StoreAddressValidate::$alias['amap']);
        // $validate->addColumn('remark', StoreAddressValidate::$alias['remark']);
        // $validate->addColumn('is_default', StoreAddressValidate::$alias['is_default']);
        // $validate->addColumn('sort', StoreAddressValidate::$alias['sort']);
        // $validate->addColumn('create_user_name', StoreAddressValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', StoreAddressValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', StoreAddressValidate::$alias['create_time']);
        // $validate->addColumn('update_time', StoreAddressValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', StoreAddressValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', StoreAddressValidate::$alias['id']);
        // $validate->addColumn('app_code', StoreAddressValidate::$alias['app_code']);
        // $validate->addColumn('store_id', StoreAddressValidate::$alias['store_id']);
        // $validate->addColumn('name', StoreAddressValidate::$alias['name']);
        // $validate->addColumn('contact', StoreAddressValidate::$alias['contact']);
        // $validate->addColumn('position', StoreAddressValidate::$alias['position']);
        // $validate->addColumn('mobile', StoreAddressValidate::$alias['mobile']);
        // $validate->addColumn('pathid', StoreAddressValidate::$alias['pathid']);
        // $validate->addColumn('province', StoreAddressValidate::$alias['province']);
        // $validate->addColumn('city', StoreAddressValidate::$alias['city']);
        // $validate->addColumn('district', StoreAddressValidate::$alias['district']);
        // $validate->addColumn('street', StoreAddressValidate::$alias['street']);
        // $validate->addColumn('address', StoreAddressValidate::$alias['address']);
        // $validate->addColumn('amap', StoreAddressValidate::$alias['amap']);
        // $validate->addColumn('remark', StoreAddressValidate::$alias['remark']);
        // $validate->addColumn('is_default', StoreAddressValidate::$alias['is_default']);
        // $validate->addColumn('sort', StoreAddressValidate::$alias['sort']);
        // $validate->addColumn('create_user_name', StoreAddressValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', StoreAddressValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', StoreAddressValidate::$alias['create_time']);
        // $validate->addColumn('update_time', StoreAddressValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', StoreAddressValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', StoreAddressValidate::$alias['id']);
        // $validate->addColumn('app_code', StoreAddressValidate::$alias['app_code']);
        // $validate->addColumn('store_id', StoreAddressValidate::$alias['store_id']);
        // $validate->addColumn('name', StoreAddressValidate::$alias['name']);
        // $validate->addColumn('contact', StoreAddressValidate::$alias['contact']);
        // $validate->addColumn('position', StoreAddressValidate::$alias['position']);
        // $validate->addColumn('mobile', StoreAddressValidate::$alias['mobile']);
        // $validate->addColumn('pathid', StoreAddressValidate::$alias['pathid']);
        // $validate->addColumn('province', StoreAddressValidate::$alias['province']);
        // $validate->addColumn('city', StoreAddressValidate::$alias['city']);
        // $validate->addColumn('district', StoreAddressValidate::$alias['district']);
        // $validate->addColumn('street', StoreAddressValidate::$alias['street']);
        // $validate->addColumn('address', StoreAddressValidate::$alias['address']);
        // $validate->addColumn('amap', StoreAddressValidate::$alias['amap']);
        // $validate->addColumn('remark', StoreAddressValidate::$alias['remark']);
        // $validate->addColumn('is_default', StoreAddressValidate::$alias['is_default']);
        // $validate->addColumn('sort', StoreAddressValidate::$alias['sort']);
        // $validate->addColumn('create_user_name', StoreAddressValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', StoreAddressValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', StoreAddressValidate::$alias['create_time']);
        // $validate->addColumn('update_time', StoreAddressValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', StoreAddressValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', StoreAddressValidate::$alias['id']);
        // $validate->addColumn('app_code', StoreAddressValidate::$alias['app_code']);
        // $validate->addColumn('store_id', StoreAddressValidate::$alias['store_id']);
        // $validate->addColumn('name', StoreAddressValidate::$alias['name']);
        // $validate->addColumn('contact', StoreAddressValidate::$alias['contact']);
        // $validate->addColumn('position', StoreAddressValidate::$alias['position']);
        // $validate->addColumn('mobile', StoreAddressValidate::$alias['mobile']);
        // $validate->addColumn('pathid', StoreAddressValidate::$alias['pathid']);
        // $validate->addColumn('province', StoreAddressValidate::$alias['province']);
        // $validate->addColumn('city', StoreAddressValidate::$alias['city']);
        // $validate->addColumn('district', StoreAddressValidate::$alias['district']);
        // $validate->addColumn('street', StoreAddressValidate::$alias['street']);
        // $validate->addColumn('address', StoreAddressValidate::$alias['address']);
        // $validate->addColumn('amap', StoreAddressValidate::$alias['amap']);
        // $validate->addColumn('remark', StoreAddressValidate::$alias['remark']);
        // $validate->addColumn('is_default', StoreAddressValidate::$alias['is_default']);
        // $validate->addColumn('sort', StoreAddressValidate::$alias['sort']);
        // $validate->addColumn('create_user_name', StoreAddressValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', StoreAddressValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', StoreAddressValidate::$alias['create_time']);
        // $validate->addColumn('update_time', StoreAddressValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', StoreAddressValidate::$alias['delete_flg']);
        
        return $validate;
    }
}
