<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class OwnerSupplierValidate
{
    protected static $alias = [
        'id' => '',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'owner_id' => '货主id',
        'third_code' => '第三方供应商id',
        'name' => '供应商名称',
        'short_name' => '简称',
        'duty_paragraph' => '税号',
        'pay_mode' => '结算方式  INBUY 立即结算 OUTBUY 售出结算',
        'zone_type' => 'IN 国内的 OUT 进口的',
        'status' => '状态',
        'prepay_flg' => '预付标识 0 非预付 1 预付',
        'forbid_flg' => '是否终止合作',
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

        // $validate->addColumn('id', OwnerSupplierValidate::$alias['id']);
        // $validate->addColumn('app_code', OwnerSupplierValidate::$alias['app_code']);
        // $validate->addColumn('owner_id', OwnerSupplierValidate::$alias['owner_id']);
        // $validate->addColumn('third_code', OwnerSupplierValidate::$alias['third_code']);
        // $validate->addColumn('name', OwnerSupplierValidate::$alias['name']);
        // $validate->addColumn('short_name', OwnerSupplierValidate::$alias['short_name']);
        // $validate->addColumn('duty_paragraph', OwnerSupplierValidate::$alias['duty_paragraph']);
        // $validate->addColumn('pay_mode', OwnerSupplierValidate::$alias['pay_mode']);
        // $validate->addColumn('zone_type', OwnerSupplierValidate::$alias['zone_type']);
        // $validate->addColumn('status', OwnerSupplierValidate::$alias['status']);
        // $validate->addColumn('prepay_flg', OwnerSupplierValidate::$alias['prepay_flg']);
        // $validate->addColumn('forbid_flg', OwnerSupplierValidate::$alias['forbid_flg']);
        // $validate->addColumn('remark', OwnerSupplierValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', OwnerSupplierValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', OwnerSupplierValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', OwnerSupplierValidate::$alias['create_time']);
        // $validate->addColumn('update_time', OwnerSupplierValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', OwnerSupplierValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OwnerSupplierValidate::$alias['id']);
        // $validate->addColumn('app_code', OwnerSupplierValidate::$alias['app_code']);
        // $validate->addColumn('owner_id', OwnerSupplierValidate::$alias['owner_id']);
        // $validate->addColumn('third_code', OwnerSupplierValidate::$alias['third_code']);
        // $validate->addColumn('name', OwnerSupplierValidate::$alias['name']);
        // $validate->addColumn('short_name', OwnerSupplierValidate::$alias['short_name']);
        // $validate->addColumn('duty_paragraph', OwnerSupplierValidate::$alias['duty_paragraph']);
        // $validate->addColumn('pay_mode', OwnerSupplierValidate::$alias['pay_mode']);
        // $validate->addColumn('zone_type', OwnerSupplierValidate::$alias['zone_type']);
        // $validate->addColumn('status', OwnerSupplierValidate::$alias['status']);
        // $validate->addColumn('prepay_flg', OwnerSupplierValidate::$alias['prepay_flg']);
        // $validate->addColumn('forbid_flg', OwnerSupplierValidate::$alias['forbid_flg']);
        // $validate->addColumn('remark', OwnerSupplierValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', OwnerSupplierValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', OwnerSupplierValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', OwnerSupplierValidate::$alias['create_time']);
        // $validate->addColumn('update_time', OwnerSupplierValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', OwnerSupplierValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OwnerSupplierValidate::$alias['id']);
        // $validate->addColumn('app_code', OwnerSupplierValidate::$alias['app_code']);
        // $validate->addColumn('owner_id', OwnerSupplierValidate::$alias['owner_id']);
        // $validate->addColumn('third_code', OwnerSupplierValidate::$alias['third_code']);
        // $validate->addColumn('name', OwnerSupplierValidate::$alias['name']);
        // $validate->addColumn('short_name', OwnerSupplierValidate::$alias['short_name']);
        // $validate->addColumn('duty_paragraph', OwnerSupplierValidate::$alias['duty_paragraph']);
        // $validate->addColumn('pay_mode', OwnerSupplierValidate::$alias['pay_mode']);
        // $validate->addColumn('zone_type', OwnerSupplierValidate::$alias['zone_type']);
        // $validate->addColumn('status', OwnerSupplierValidate::$alias['status']);
        // $validate->addColumn('prepay_flg', OwnerSupplierValidate::$alias['prepay_flg']);
        // $validate->addColumn('forbid_flg', OwnerSupplierValidate::$alias['forbid_flg']);
        // $validate->addColumn('remark', OwnerSupplierValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', OwnerSupplierValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', OwnerSupplierValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', OwnerSupplierValidate::$alias['create_time']);
        // $validate->addColumn('update_time', OwnerSupplierValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', OwnerSupplierValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OwnerSupplierValidate::$alias['id'])->required()->notEmpty();
        // $validate->addColumn('app_code', OwnerSupplierValidate::$alias['app_code']);
        // $validate->addColumn('owner_id', OwnerSupplierValidate::$alias['owner_id']);
        // $validate->addColumn('third_code', OwnerSupplierValidate::$alias['third_code']);
        // $validate->addColumn('name', OwnerSupplierValidate::$alias['name']);
        // $validate->addColumn('short_name', OwnerSupplierValidate::$alias['short_name']);
        // $validate->addColumn('duty_paragraph', OwnerSupplierValidate::$alias['duty_paragraph']);
        // $validate->addColumn('pay_mode', OwnerSupplierValidate::$alias['pay_mode']);
        // $validate->addColumn('zone_type', OwnerSupplierValidate::$alias['zone_type']);
        // $validate->addColumn('status', OwnerSupplierValidate::$alias['status']);
        // $validate->addColumn('prepay_flg', OwnerSupplierValidate::$alias['prepay_flg']);
        // $validate->addColumn('forbid_flg', OwnerSupplierValidate::$alias['forbid_flg']);
        // $validate->addColumn('remark', OwnerSupplierValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', OwnerSupplierValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', OwnerSupplierValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', OwnerSupplierValidate::$alias['create_time']);
        // $validate->addColumn('update_time', OwnerSupplierValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', OwnerSupplierValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OwnerSupplierValidate::$alias['id'])->required()->notEmpty();
        // $validate->addColumn('app_code', OwnerSupplierValidate::$alias['app_code']);
        // $validate->addColumn('owner_id', OwnerSupplierValidate::$alias['owner_id']);
        // $validate->addColumn('third_code', OwnerSupplierValidate::$alias['third_code']);
        // $validate->addColumn('name', OwnerSupplierValidate::$alias['name']);
        // $validate->addColumn('short_name', OwnerSupplierValidate::$alias['short_name']);
        // $validate->addColumn('duty_paragraph', OwnerSupplierValidate::$alias['duty_paragraph']);
        // $validate->addColumn('pay_mode', OwnerSupplierValidate::$alias['pay_mode']);
        // $validate->addColumn('zone_type', OwnerSupplierValidate::$alias['zone_type']);
        // $validate->addColumn('status', OwnerSupplierValidate::$alias['status']);
        // $validate->addColumn('prepay_flg', OwnerSupplierValidate::$alias['prepay_flg']);
        // $validate->addColumn('forbid_flg', OwnerSupplierValidate::$alias['forbid_flg']);
        // $validate->addColumn('remark', OwnerSupplierValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', OwnerSupplierValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', OwnerSupplierValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', OwnerSupplierValidate::$alias['create_time']);
        // $validate->addColumn('update_time', OwnerSupplierValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', OwnerSupplierValidate::$alias['delete_flg']);
        
        return $validate;
    }
}
