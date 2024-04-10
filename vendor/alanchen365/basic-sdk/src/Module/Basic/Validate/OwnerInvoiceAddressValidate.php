<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class OwnerInvoiceAddressValidate
{
    protected static $alias = [
        'id' => '',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'payer_type' => '付款方类型',
        'name' => '名称',
        'duty_paragraph' => '税号',
        'type' => '发票类型',
        'email' => '电子邮箱',
        'pathid' => '原始地区编码',
        'province' => '省',
        'city' => '市',
        'district' => '区',
        'complete_address' => '详细地址',
        'contact_name' => '联系人',
        'contact_mobile' => '联系人电话',
        'create_user_name' => '创建人用户名',
        'create_user_code' => '创建人code',
        'create_time' => '创建时间',
        'update_time' => '最后更新时间',
        'delete_flg' => '是否删除',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OwnerInvoiceAddressValidate::$alias['id']);
        // $validate->addColumn('app_code', OwnerInvoiceAddressValidate::$alias['app_code']);
        // $validate->addColumn('owner_id', OwnerInvoiceAddressValidate::$alias['owner_id']);
        // $validate->addColumn('type', OwnerInvoiceAddressValidate::$alias['type']);
        // $validate->addColumn('email', OwnerInvoiceAddressValidate::$alias['email']);
        // $validate->addColumn('pathid', OwnerInvoiceAddressValidate::$alias['pathid']);
        // $validate->addColumn('province', OwnerInvoiceAddressValidate::$alias['province']);
        // $validate->addColumn('city', OwnerInvoiceAddressValidate::$alias['city']);
        // $validate->addColumn('district', OwnerInvoiceAddressValidate::$alias['district']);
        // $validate->addColumn('complete_address', OwnerInvoiceAddressValidate::$alias['complete_address']);
        // $validate->addColumn('contact_name', OwnerInvoiceAddressValidate::$alias['contact_name']);
        // $validate->addColumn('contact_mobile', OwnerInvoiceAddressValidate::$alias['contact_mobile']);
        // $validate->addColumn('create_user_name', OwnerInvoiceAddressValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', OwnerInvoiceAddressValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', OwnerInvoiceAddressValidate::$alias['create_time']);
        // $validate->addColumn('update_time', OwnerInvoiceAddressValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', OwnerInvoiceAddressValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OwnerInvoiceAddressValidate::$alias['id']);
        // $validate->addColumn('app_code', OwnerInvoiceAddressValidate::$alias['app_code']);
        // $validate->addColumn('owner_id', OwnerInvoiceAddressValidate::$alias['owner_id']);
        // $validate->addColumn('type', OwnerInvoiceAddressValidate::$alias['type']);
        // $validate->addColumn('email', OwnerInvoiceAddressValidate::$alias['email']);
        // $validate->addColumn('pathid', OwnerInvoiceAddressValidate::$alias['pathid']);
        // $validate->addColumn('province', OwnerInvoiceAddressValidate::$alias['province']);
        // $validate->addColumn('city', OwnerInvoiceAddressValidate::$alias['city']);
        // $validate->addColumn('district', OwnerInvoiceAddressValidate::$alias['district']);
        // $validate->addColumn('complete_address', OwnerInvoiceAddressValidate::$alias['complete_address']);
        // $validate->addColumn('contact_name', OwnerInvoiceAddressValidate::$alias['contact_name']);
        // $validate->addColumn('contact_mobile', OwnerInvoiceAddressValidate::$alias['contact_mobile']);
        // $validate->addColumn('create_user_name', OwnerInvoiceAddressValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', OwnerInvoiceAddressValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', OwnerInvoiceAddressValidate::$alias['create_time']);
        // $validate->addColumn('update_time', OwnerInvoiceAddressValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', OwnerInvoiceAddressValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function insert(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OwnerInvoiceAddressValidate::$alias['id']);
        // $validate->addColumn('app_code', OwnerInvoiceAddressValidate::$alias['app_code']);
        // $validate->addColumn('type', OwnerInvoiceAddressValidate::$alias['type']);
        // $validate->addColumn('email', OwnerInvoiceAddressValidate::$alias['email']);
        // $validate->addColumn('name', OwnerInvoiceAddressValidate::$alias['name'])->required()->notEmpty();
        // $validate->addColumn('payer_type', OwnerInvoiceAddressValidate::$alias['payer_type'])->required()->notEmpty();
        // $validate->addColumn('duty_paragraph', OwnerInvoiceAddressValidate::$alias['duty_paragraph'])->required()->notEmpty();
        // $validate->addColumn('city', OwnerInvoiceAddressValidate::$alias['city']);
        // $validate->addColumn('district', OwnerInvoiceAddressValidate::$alias['district']);
        // $validate->addColumn('complete_address', OwnerInvoiceAddressValidate::$alias['complete_address']);
        // $validate->addColumn('contact_name', OwnerInvoiceAddressValidate::$alias['contact_name']);
        // $validate->addColumn('contact_mobile', OwnerInvoiceAddressValidate::$alias['contact_mobile']);
        // $validate->addColumn('create_user_name', OwnerInvoiceAddressValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', OwnerInvoiceAddressValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', OwnerInvoiceAddressValidate::$alias['create_time']);
        // $validate->addColumn('update_time', OwnerInvoiceAddressValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', OwnerInvoiceAddressValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OwnerInvoiceAddressValidate::$alias['id'])->required()->notEmpty();
        // $validate->addColumn('app_code', OwnerInvoiceAddressValidate::$alias['app_code']);
        // $validate->addColumn('owner_id', OwnerInvoiceAddressValidate::$alias['owner_id']);
        // $validate->addColumn('type', OwnerInvoiceAddressValidate::$alias['type']);
        // $validate->addColumn('email', OwnerInvoiceAddressValidate::$alias['email']);
        // $validate->addColumn('pathid', OwnerInvoiceAddressValidate::$alias['pathid']);
        // $validate->addColumn('province', OwnerInvoiceAddressValidate::$alias['province']);
        // $validate->addColumn('city', OwnerInvoiceAddressValidate::$alias['city']);
        // $validate->addColumn('district', OwnerInvoiceAddressValidate::$alias['district']);
        // $validate->addColumn('complete_address', OwnerInvoiceAddressValidate::$alias['complete_address']);
        // $validate->addColumn('contact_name', OwnerInvoiceAddressValidate::$alias['contact_name']);
        // $validate->addColumn('contact_mobile', OwnerInvoiceAddressValidate::$alias['contact_mobile']);
        // $validate->addColumn('create_user_name', OwnerInvoiceAddressValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', OwnerInvoiceAddressValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', OwnerInvoiceAddressValidate::$alias['create_time']);
        // $validate->addColumn('update_time', OwnerInvoiceAddressValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', OwnerInvoiceAddressValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OwnerInvoiceAddressValidate::$alias['id'])->required()->notEmpty();
        // $validate->addColumn('app_code', OwnerInvoiceAddressValidate::$alias['app_code']);
        // $validate->addColumn('owner_id', OwnerInvoiceAddressValidate::$alias['owner_id']);
        // $validate->addColumn('type', OwnerInvoiceAddressValidate::$alias['type']);
        // $validate->addColumn('email', OwnerInvoiceAddressValidate::$alias['email']);
        // $validate->addColumn('pathid', OwnerInvoiceAddressValidate::$alias['pathid']);
        // $validate->addColumn('province', OwnerInvoiceAddressValidate::$alias['province']);
        // $validate->addColumn('city', OwnerInvoiceAddressValidate::$alias['city']);
        // $validate->addColumn('district', OwnerInvoiceAddressValidate::$alias['district']);
        // $validate->addColumn('complete_address', OwnerInvoiceAddressValidate::$alias['complete_address']);
        // $validate->addColumn('contact_name', OwnerInvoiceAddressValidate::$alias['contact_name']);
        // $validate->addColumn('contact_mobile', OwnerInvoiceAddressValidate::$alias['contact_mobile']);
        // $validate->addColumn('create_user_name', OwnerInvoiceAddressValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', OwnerInvoiceAddressValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', OwnerInvoiceAddressValidate::$alias['create_time']);
        // $validate->addColumn('update_time', OwnerInvoiceAddressValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', OwnerInvoiceAddressValidate::$alias['delete_flg']);
        
        return $validate;
    }
}
