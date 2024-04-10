<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class OwnerValidate
{
    protected static $alias = [
        'id' => '',
        'code' => '唯一编码',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'name' => '货主全称',
        'short_name' => '货主简称',
        'logo_url' => 'LOGO',
        'use_flg' => '1:物流&amp;仓库, 2:物流，3:仓库',
        'payperiod' => '是否月结',
        'status' => '状态',
        'is_check' => '是否需要审核',
        'check_mobile' => '审核电话',
        'check_user_name' => '审核人姓名',
        'open_id' => '微信登录唯一标识',
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
        'type' => '货主类型',
        'remark' => '备注',
        'create_user_name' => '创建人用户名',
        'create_user_code' => '创建人code',
        'create_time' => '创建时间',
        'update_time' => '最后更新时间',
        'delete_flg' => '是否删除',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OwnerValidate::$alias['id']);
        // $validate->addColumn('code', OwnerValidate::$alias['code']);
        // $validate->addColumn('app_code', OwnerValidate::$alias['app_code']);
        // $validate->addColumn('name', OwnerValidate::$alias['name']);
        // $validate->addColumn('short_name', OwnerValidate::$alias['short_name']);
        // $validate->addColumn('logo_url', OwnerValidate::$alias['logo_url']);
        // $validate->addColumn('use_flg', OwnerValidate::$alias['use_flg']);
        // $validate->addColumn('payperiod', OwnerValidate::$alias['payperiod']);
        // $validate->addColumn('status', OwnerValidate::$alias['status']);
        // $validate->addColumn('is_check', OwnerValidate::$alias['is_check']);
        // $validate->addColumn('check_mobile', OwnerValidate::$alias['check_mobile']);
        // $validate->addColumn('check_user_name', OwnerValidate::$alias['check_user_name']);
        // $validate->addColumn('open_id', OwnerValidate::$alias['open_id']);
        // $validate->addColumn('pathid', OwnerValidate::$alias['pathid']);
        // $validate->addColumn('province', OwnerValidate::$alias['province']);
        // $validate->addColumn('city', OwnerValidate::$alias['city']);
        // $validate->addColumn('district', OwnerValidate::$alias['district']);
        // $validate->addColumn('complete_address', OwnerValidate::$alias['complete_address']);
        // $validate->addColumn('contact_name_1', OwnerValidate::$alias['contact_name_1']);
        // $validate->addColumn('contact_mobile_1', OwnerValidate::$alias['contact_mobile_1']);
        // $validate->addColumn('contact_name_2', OwnerValidate::$alias['contact_name_2']);
        // $validate->addColumn('contact_mobile_2', OwnerValidate::$alias['contact_mobile_2']);
        // $validate->addColumn('amap_adcode', OwnerValidate::$alias['amap_adcode']);
        // $validate->addColumn('amap_lng', OwnerValidate::$alias['amap_lng']);
        // $validate->addColumn('amap_lat', OwnerValidate::$alias['amap_lat']);
        // $validate->addColumn('type', OwnerValidate::$alias['type']);
        // $validate->addColumn('remark', OwnerValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', OwnerValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', OwnerValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', OwnerValidate::$alias['create_time']);
        // $validate->addColumn('update_time', OwnerValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', OwnerValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OwnerValidate::$alias['id']);
        // $validate->addColumn('code', OwnerValidate::$alias['code']);
        // $validate->addColumn('app_code', OwnerValidate::$alias['app_code']);
        // $validate->addColumn('name', OwnerValidate::$alias['name']);
        // $validate->addColumn('short_name', OwnerValidate::$alias['short_name']);
        // $validate->addColumn('logo_url', OwnerValidate::$alias['logo_url']);
        // $validate->addColumn('use_flg', OwnerValidate::$alias['use_flg']);
        // $validate->addColumn('payperiod', OwnerValidate::$alias['payperiod']);
        // $validate->addColumn('status', OwnerValidate::$alias['status']);
        // $validate->addColumn('is_check', OwnerValidate::$alias['is_check']);
        // $validate->addColumn('check_mobile', OwnerValidate::$alias['check_mobile']);
        // $validate->addColumn('check_user_name', OwnerValidate::$alias['check_user_name']);
        // $validate->addColumn('open_id', OwnerValidate::$alias['open_id']);
        // $validate->addColumn('pathid', OwnerValidate::$alias['pathid']);
        // $validate->addColumn('province', OwnerValidate::$alias['province']);
        // $validate->addColumn('city', OwnerValidate::$alias['city']);
        // $validate->addColumn('district', OwnerValidate::$alias['district']);
        // $validate->addColumn('complete_address', OwnerValidate::$alias['complete_address']);
        // $validate->addColumn('contact_name_1', OwnerValidate::$alias['contact_name_1']);
        // $validate->addColumn('contact_mobile_1', OwnerValidate::$alias['contact_mobile_1']);
        // $validate->addColumn('contact_name_2', OwnerValidate::$alias['contact_name_2']);
        // $validate->addColumn('contact_mobile_2', OwnerValidate::$alias['contact_mobile_2']);
        // $validate->addColumn('amap_adcode', OwnerValidate::$alias['amap_adcode']);
        // $validate->addColumn('amap_lng', OwnerValidate::$alias['amap_lng']);
        // $validate->addColumn('amap_lat', OwnerValidate::$alias['amap_lat']);
        // $validate->addColumn('type', OwnerValidate::$alias['type']);
        // $validate->addColumn('remark', OwnerValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', OwnerValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', OwnerValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', OwnerValidate::$alias['create_time']);
        // $validate->addColumn('update_time', OwnerValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', OwnerValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OwnerValidate::$alias['id']);
        // $validate->addColumn('code', OwnerValidate::$alias['code']);
        // $validate->addColumn('app_code', OwnerValidate::$alias['app_code']);
        // $validate->addColumn('name', OwnerValidate::$alias['name']);
        // $validate->addColumn('short_name', OwnerValidate::$alias['short_name']);
        // $validate->addColumn('logo_url', OwnerValidate::$alias['logo_url']);
        // $validate->addColumn('use_flg', OwnerValidate::$alias['use_flg']);
        // $validate->addColumn('payperiod', OwnerValidate::$alias['payperiod']);
        // $validate->addColumn('status', OwnerValidate::$alias['status']);
        // $validate->addColumn('is_check', OwnerValidate::$alias['is_check']);
        // $validate->addColumn('check_mobile', OwnerValidate::$alias['check_mobile']);
        // $validate->addColumn('check_user_name', OwnerValidate::$alias['check_user_name']);
        // $validate->addColumn('open_id', OwnerValidate::$alias['open_id']);
        // $validate->addColumn('pathid', OwnerValidate::$alias['pathid']);
        // $validate->addColumn('province', OwnerValidate::$alias['province']);
        // $validate->addColumn('city', OwnerValidate::$alias['city']);
        // $validate->addColumn('district', OwnerValidate::$alias['district']);
        // $validate->addColumn('complete_address', OwnerValidate::$alias['complete_address']);
        // $validate->addColumn('contact_name_1', OwnerValidate::$alias['contact_name_1']);
        // $validate->addColumn('contact_mobile_1', OwnerValidate::$alias['contact_mobile_1']);
        // $validate->addColumn('contact_name_2', OwnerValidate::$alias['contact_name_2']);
        // $validate->addColumn('contact_mobile_2', OwnerValidate::$alias['contact_mobile_2']);
        // $validate->addColumn('amap_adcode', OwnerValidate::$alias['amap_adcode']);
        // $validate->addColumn('amap_lng', OwnerValidate::$alias['amap_lng']);
        // $validate->addColumn('amap_lat', OwnerValidate::$alias['amap_lat']);
        // $validate->addColumn('type', OwnerValidate::$alias['type']);
        // $validate->addColumn('remark', OwnerValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', OwnerValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', OwnerValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', OwnerValidate::$alias['create_time']);
        // $validate->addColumn('update_time', OwnerValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', OwnerValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OwnerValidate::$alias['id']);
        // $validate->addColumn('code', OwnerValidate::$alias['code']);
        // $validate->addColumn('app_code', OwnerValidate::$alias['app_code']);
        // $validate->addColumn('name', OwnerValidate::$alias['name']);
        // $validate->addColumn('short_name', OwnerValidate::$alias['short_name']);
        // $validate->addColumn('logo_url', OwnerValidate::$alias['logo_url']);
        // $validate->addColumn('use_flg', OwnerValidate::$alias['use_flg']);
        // $validate->addColumn('payperiod', OwnerValidate::$alias['payperiod']);
        // $validate->addColumn('status', OwnerValidate::$alias['status']);
        // $validate->addColumn('is_check', OwnerValidate::$alias['is_check']);
        // $validate->addColumn('check_mobile', OwnerValidate::$alias['check_mobile']);
        // $validate->addColumn('check_user_name', OwnerValidate::$alias['check_user_name']);
        // $validate->addColumn('open_id', OwnerValidate::$alias['open_id']);
        // $validate->addColumn('pathid', OwnerValidate::$alias['pathid']);
        // $validate->addColumn('province', OwnerValidate::$alias['province']);
        // $validate->addColumn('city', OwnerValidate::$alias['city']);
        // $validate->addColumn('district', OwnerValidate::$alias['district']);
        // $validate->addColumn('complete_address', OwnerValidate::$alias['complete_address']);
        // $validate->addColumn('contact_name_1', OwnerValidate::$alias['contact_name_1']);
        // $validate->addColumn('contact_mobile_1', OwnerValidate::$alias['contact_mobile_1']);
        // $validate->addColumn('contact_name_2', OwnerValidate::$alias['contact_name_2']);
        // $validate->addColumn('contact_mobile_2', OwnerValidate::$alias['contact_mobile_2']);
        // $validate->addColumn('amap_adcode', OwnerValidate::$alias['amap_adcode']);
        // $validate->addColumn('amap_lng', OwnerValidate::$alias['amap_lng']);
        // $validate->addColumn('amap_lat', OwnerValidate::$alias['amap_lat']);
        // $validate->addColumn('type', OwnerValidate::$alias['type']);
        // $validate->addColumn('remark', OwnerValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', OwnerValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', OwnerValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', OwnerValidate::$alias['create_time']);
        // $validate->addColumn('update_time', OwnerValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', OwnerValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OwnerValidate::$alias['id']);
        // $validate->addColumn('code', OwnerValidate::$alias['code']);
        // $validate->addColumn('app_code', OwnerValidate::$alias['app_code']);
        // $validate->addColumn('name', OwnerValidate::$alias['name']);
        // $validate->addColumn('short_name', OwnerValidate::$alias['short_name']);
        // $validate->addColumn('logo_url', OwnerValidate::$alias['logo_url']);
        // $validate->addColumn('use_flg', OwnerValidate::$alias['use_flg']);
        // $validate->addColumn('payperiod', OwnerValidate::$alias['payperiod']);
        // $validate->addColumn('status', OwnerValidate::$alias['status']);
        // $validate->addColumn('is_check', OwnerValidate::$alias['is_check']);
        // $validate->addColumn('check_mobile', OwnerValidate::$alias['check_mobile']);
        // $validate->addColumn('check_user_name', OwnerValidate::$alias['check_user_name']);
        // $validate->addColumn('open_id', OwnerValidate::$alias['open_id']);
        // $validate->addColumn('pathid', OwnerValidate::$alias['pathid']);
        // $validate->addColumn('province', OwnerValidate::$alias['province']);
        // $validate->addColumn('city', OwnerValidate::$alias['city']);
        // $validate->addColumn('district', OwnerValidate::$alias['district']);
        // $validate->addColumn('complete_address', OwnerValidate::$alias['complete_address']);
        // $validate->addColumn('contact_name_1', OwnerValidate::$alias['contact_name_1']);
        // $validate->addColumn('contact_mobile_1', OwnerValidate::$alias['contact_mobile_1']);
        // $validate->addColumn('contact_name_2', OwnerValidate::$alias['contact_name_2']);
        // $validate->addColumn('contact_mobile_2', OwnerValidate::$alias['contact_mobile_2']);
        // $validate->addColumn('amap_adcode', OwnerValidate::$alias['amap_adcode']);
        // $validate->addColumn('amap_lng', OwnerValidate::$alias['amap_lng']);
        // $validate->addColumn('amap_lat', OwnerValidate::$alias['amap_lat']);
        // $validate->addColumn('type', OwnerValidate::$alias['type']);
        // $validate->addColumn('remark', OwnerValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', OwnerValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', OwnerValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', OwnerValidate::$alias['create_time']);
        // $validate->addColumn('update_time', OwnerValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', OwnerValidate::$alias['delete_flg']);
        
        return $validate;
    }
}
