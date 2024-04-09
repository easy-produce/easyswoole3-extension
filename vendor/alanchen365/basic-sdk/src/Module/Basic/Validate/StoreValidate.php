<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class StoreValidate
{
    protected static $alias = [
        'id' => '',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'center_id' => '运营中心编号',
        'owner_id' => '货主编号',
        'owner_name' => '货主名称',
        'name' => '名称',
        'short_name' => '简称',
        'code' => '编码',
        'pathid' => '区域编号',
        'province' => '省',
        'city' => '市',
        'district' => '区',
        'street' => '街道',
        'address' => '地址',
        'contacts' => '联系人',
        'tel' => '联系电话',
        'postcode' => '邮编',
        'logo_url' => 'LOGO',
        'auto_choose_depot' => '允许自动挑仓',
        'is_check' => '是否需要审核',
        'status' => '状态 ',
        'ruledate_id' => '配送执行规则编号',
        'purchase_id' => '总采购编号',
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

        // $validate->addColumn('id', StoreValidate::$alias['id']);
        // $validate->addColumn('app_code', StoreValidate::$alias['app_code']);
        // $validate->addColumn('center_id', StoreValidate::$alias['center_id']);
        // $validate->addColumn('owner_id', StoreValidate::$alias['owner_id']);
        // $validate->addColumn('owner_name', StoreValidate::$alias['owner_name']);
        // $validate->addColumn('name', StoreValidate::$alias['name']);
        // $validate->addColumn('short_name', StoreValidate::$alias['short_name']);
        // $validate->addColumn('code', StoreValidate::$alias['code']);
        // $validate->addColumn('pathid', StoreValidate::$alias['pathid']);
        // $validate->addColumn('province', StoreValidate::$alias['province']);
        // $validate->addColumn('city', StoreValidate::$alias['city']);
        // $validate->addColumn('district', StoreValidate::$alias['district']);
        // $validate->addColumn('street', StoreValidate::$alias['street']);
        // $validate->addColumn('address', StoreValidate::$alias['address']);
        // $validate->addColumn('contacts', StoreValidate::$alias['contacts']);
        // $validate->addColumn('tel', StoreValidate::$alias['tel']);
        // $validate->addColumn('postcode', StoreValidate::$alias['postcode']);
        // $validate->addColumn('logo_url', StoreValidate::$alias['logo_url']);
        // $validate->addColumn('auto_choose_depot', StoreValidate::$alias['auto_choose_depot']);
        // $validate->addColumn('is_check', StoreValidate::$alias['is_check']);
        // $validate->addColumn('status', StoreValidate::$alias['status']);
        // $validate->addColumn('ruledate_id', StoreValidate::$alias['ruledate_id']);
        // $validate->addColumn('purchase_id', StoreValidate::$alias['purchase_id']);
        // $validate->addColumn('remark', StoreValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', StoreValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', StoreValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', StoreValidate::$alias['create_time']);
        // $validate->addColumn('update_time', StoreValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', StoreValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', StoreValidate::$alias['id']);
        // $validate->addColumn('app_code', StoreValidate::$alias['app_code']);
        // $validate->addColumn('center_id', StoreValidate::$alias['center_id']);
        // $validate->addColumn('owner_id', StoreValidate::$alias['owner_id']);
        // $validate->addColumn('owner_name', StoreValidate::$alias['owner_name']);
        // $validate->addColumn('name', StoreValidate::$alias['name']);
        // $validate->addColumn('short_name', StoreValidate::$alias['short_name']);
        // $validate->addColumn('code', StoreValidate::$alias['code']);
        // $validate->addColumn('pathid', StoreValidate::$alias['pathid']);
        // $validate->addColumn('province', StoreValidate::$alias['province']);
        // $validate->addColumn('city', StoreValidate::$alias['city']);
        // $validate->addColumn('district', StoreValidate::$alias['district']);
        // $validate->addColumn('street', StoreValidate::$alias['street']);
        // $validate->addColumn('address', StoreValidate::$alias['address']);
        // $validate->addColumn('contacts', StoreValidate::$alias['contacts']);
        // $validate->addColumn('tel', StoreValidate::$alias['tel']);
        // $validate->addColumn('postcode', StoreValidate::$alias['postcode']);
        // $validate->addColumn('logo_url', StoreValidate::$alias['logo_url']);
        // $validate->addColumn('auto_choose_depot', StoreValidate::$alias['auto_choose_depot']);
        // $validate->addColumn('is_check', StoreValidate::$alias['is_check']);
        // $validate->addColumn('status', StoreValidate::$alias['status']);
        // $validate->addColumn('ruledate_id', StoreValidate::$alias['ruledate_id']);
        // $validate->addColumn('purchase_id', StoreValidate::$alias['purchase_id']);
        // $validate->addColumn('remark', StoreValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', StoreValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', StoreValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', StoreValidate::$alias['create_time']);
        // $validate->addColumn('update_time', StoreValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', StoreValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', StoreValidate::$alias['id']);
        // $validate->addColumn('app_code', StoreValidate::$alias['app_code']);
        // $validate->addColumn('center_id', StoreValidate::$alias['center_id']);
        // $validate->addColumn('owner_id', StoreValidate::$alias['owner_id']);
        // $validate->addColumn('owner_name', StoreValidate::$alias['owner_name']);
        // $validate->addColumn('name', StoreValidate::$alias['name']);
        // $validate->addColumn('short_name', StoreValidate::$alias['short_name']);
        // $validate->addColumn('code', StoreValidate::$alias['code']);
        // $validate->addColumn('pathid', StoreValidate::$alias['pathid']);
        // $validate->addColumn('province', StoreValidate::$alias['province']);
        // $validate->addColumn('city', StoreValidate::$alias['city']);
        // $validate->addColumn('district', StoreValidate::$alias['district']);
        // $validate->addColumn('street', StoreValidate::$alias['street']);
        // $validate->addColumn('address', StoreValidate::$alias['address']);
        // $validate->addColumn('contacts', StoreValidate::$alias['contacts']);
        // $validate->addColumn('tel', StoreValidate::$alias['tel']);
        // $validate->addColumn('postcode', StoreValidate::$alias['postcode']);
        // $validate->addColumn('logo_url', StoreValidate::$alias['logo_url']);
        // $validate->addColumn('auto_choose_depot', StoreValidate::$alias['auto_choose_depot']);
        // $validate->addColumn('is_check', StoreValidate::$alias['is_check']);
        // $validate->addColumn('status', StoreValidate::$alias['status']);
        // $validate->addColumn('ruledate_id', StoreValidate::$alias['ruledate_id']);
        // $validate->addColumn('purchase_id', StoreValidate::$alias['purchase_id']);
        // $validate->addColumn('remark', StoreValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', StoreValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', StoreValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', StoreValidate::$alias['create_time']);
        // $validate->addColumn('update_time', StoreValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', StoreValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', StoreValidate::$alias['id']);
        // $validate->addColumn('app_code', StoreValidate::$alias['app_code']);
        // $validate->addColumn('center_id', StoreValidate::$alias['center_id']);
        // $validate->addColumn('owner_id', StoreValidate::$alias['owner_id']);
        // $validate->addColumn('owner_name', StoreValidate::$alias['owner_name']);
        // $validate->addColumn('name', StoreValidate::$alias['name']);
        // $validate->addColumn('short_name', StoreValidate::$alias['short_name']);
        // $validate->addColumn('code', StoreValidate::$alias['code']);
        // $validate->addColumn('pathid', StoreValidate::$alias['pathid']);
        // $validate->addColumn('province', StoreValidate::$alias['province']);
        // $validate->addColumn('city', StoreValidate::$alias['city']);
        // $validate->addColumn('district', StoreValidate::$alias['district']);
        // $validate->addColumn('street', StoreValidate::$alias['street']);
        // $validate->addColumn('address', StoreValidate::$alias['address']);
        // $validate->addColumn('contacts', StoreValidate::$alias['contacts']);
        // $validate->addColumn('tel', StoreValidate::$alias['tel']);
        // $validate->addColumn('postcode', StoreValidate::$alias['postcode']);
        // $validate->addColumn('logo_url', StoreValidate::$alias['logo_url']);
        // $validate->addColumn('auto_choose_depot', StoreValidate::$alias['auto_choose_depot']);
        // $validate->addColumn('is_check', StoreValidate::$alias['is_check']);
        // $validate->addColumn('status', StoreValidate::$alias['status']);
        // $validate->addColumn('ruledate_id', StoreValidate::$alias['ruledate_id']);
        // $validate->addColumn('purchase_id', StoreValidate::$alias['purchase_id']);
        // $validate->addColumn('remark', StoreValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', StoreValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', StoreValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', StoreValidate::$alias['create_time']);
        // $validate->addColumn('update_time', StoreValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', StoreValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', StoreValidate::$alias['id']);
        // $validate->addColumn('app_code', StoreValidate::$alias['app_code']);
        // $validate->addColumn('center_id', StoreValidate::$alias['center_id']);
        // $validate->addColumn('owner_id', StoreValidate::$alias['owner_id']);
        // $validate->addColumn('owner_name', StoreValidate::$alias['owner_name']);
        // $validate->addColumn('name', StoreValidate::$alias['name']);
        // $validate->addColumn('short_name', StoreValidate::$alias['short_name']);
        // $validate->addColumn('code', StoreValidate::$alias['code']);
        // $validate->addColumn('pathid', StoreValidate::$alias['pathid']);
        // $validate->addColumn('province', StoreValidate::$alias['province']);
        // $validate->addColumn('city', StoreValidate::$alias['city']);
        // $validate->addColumn('district', StoreValidate::$alias['district']);
        // $validate->addColumn('street', StoreValidate::$alias['street']);
        // $validate->addColumn('address', StoreValidate::$alias['address']);
        // $validate->addColumn('contacts', StoreValidate::$alias['contacts']);
        // $validate->addColumn('tel', StoreValidate::$alias['tel']);
        // $validate->addColumn('postcode', StoreValidate::$alias['postcode']);
        // $validate->addColumn('logo_url', StoreValidate::$alias['logo_url']);
        // $validate->addColumn('auto_choose_depot', StoreValidate::$alias['auto_choose_depot']);
        // $validate->addColumn('is_check', StoreValidate::$alias['is_check']);
        // $validate->addColumn('status', StoreValidate::$alias['status']);
        // $validate->addColumn('ruledate_id', StoreValidate::$alias['ruledate_id']);
        // $validate->addColumn('purchase_id', StoreValidate::$alias['purchase_id']);
        // $validate->addColumn('remark', StoreValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', StoreValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', StoreValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', StoreValidate::$alias['create_time']);
        // $validate->addColumn('update_time', StoreValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', StoreValidate::$alias['delete_flg']);
        
        return $validate;
    }
}
