<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class SupplierDepotFeeValidate
{
    protected static $alias = [
        'id' => '',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'supplier_id' => '供应商ID',
        'depot_id' => '仓库ID',
        'save_type' => '仓储环境',
        'product_id' => '产品ID',
        'record_source' => '记录来源',
        'fee_category' => '费用类型',
        'cal_guige' => '计费规格',
        'cal_type' => '计费方式',
        'cal_cross' => '扣今出',
        'rate' => '费率',
        'status' => '状态',
        'start_date' => '开始日期',
        'tuo_count' => '每托产品数量',
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

        // $validate->addColumn('id', OwnerToInvoiceAddressValidate::$alias['id']);
        // $validate->addColumn('app_code', OwnerToInvoiceAddressValidate::$alias['app_code']);
        // $validate->addColumn('owner_id', OwnerToInvoiceAddressValidate::$alias['owner_id']);
        // $validate->addColumn('invoice_address_id', OwnerToInvoiceAddressValidate::$alias['invoice_address_id']);
        // $validate->addColumn('create_user_name', OwnerToInvoiceAddressValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', OwnerToInvoiceAddressValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', OwnerToInvoiceAddressValidate::$alias['create_time']);
        // $validate->addColumn('update_time', OwnerToInvoiceAddressValidate::$alias['update_time']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OwnerToInvoiceAddressValidate::$alias['id']);
        // $validate->addColumn('app_code', OwnerToInvoiceAddressValidate::$alias['app_code']);
        // $validate->addColumn('owner_id', OwnerToInvoiceAddressValidate::$alias['owner_id']);
        // $validate->addColumn('invoice_address_id', OwnerToInvoiceAddressValidate::$alias['invoice_address_id']);
        // $validate->addColumn('create_user_name', OwnerToInvoiceAddressValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', OwnerToInvoiceAddressValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', OwnerToInvoiceAddressValidate::$alias['create_time']);
        // $validate->addColumn('update_time', OwnerToInvoiceAddressValidate::$alias['update_time']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OwnerToInvoiceAddressValidate::$alias['id']);
        // $validate->addColumn('app_code', OwnerToInvoiceAddressValidate::$alias['app_code']);
        // $validate->addColumn('owner_id', OwnerToInvoiceAddressValidate::$alias['owner_id']);
        // $validate->addColumn('invoice_address_id', OwnerToInvoiceAddressValidate::$alias['invoice_address_id']);
        // $validate->addColumn('create_user_name', OwnerToInvoiceAddressValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', OwnerToInvoiceAddressValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', OwnerToInvoiceAddressValidate::$alias['create_time']);
        // $validate->addColumn('update_time', OwnerToInvoiceAddressValidate::$alias['update_time']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OwnerToInvoiceAddressValidate::$alias['id'])->required()->notEmpty();
        // $validate->addColumn('app_code', OwnerToInvoiceAddressValidate::$alias['app_code']);
        // $validate->addColumn('owner_id', OwnerToInvoiceAddressValidate::$alias['owner_id']);
        // $validate->addColumn('invoice_address_id', OwnerToInvoiceAddressValidate::$alias['invoice_address_id']);
        // $validate->addColumn('create_user_name', OwnerToInvoiceAddressValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', OwnerToInvoiceAddressValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', OwnerToInvoiceAddressValidate::$alias['create_time']);
        // $validate->addColumn('update_time', OwnerToInvoiceAddressValidate::$alias['update_time']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OwnerToInvoiceAddressValidate::$alias['id'])->required()->notEmpty();
        // $validate->addColumn('app_code', OwnerToInvoiceAddressValidate::$alias['app_code']);
        // $validate->addColumn('owner_id', OwnerToInvoiceAddressValidate::$alias['owner_id']);
        // $validate->addColumn('invoice_address_id', OwnerToInvoiceAddressValidate::$alias['invoice_address_id']);
        // $validate->addColumn('create_user_name', OwnerToInvoiceAddressValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', OwnerToInvoiceAddressValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', OwnerToInvoiceAddressValidate::$alias['create_time']);
        // $validate->addColumn('update_time', OwnerToInvoiceAddressValidate::$alias['update_time']);
        
        return $validate;
    }
}
