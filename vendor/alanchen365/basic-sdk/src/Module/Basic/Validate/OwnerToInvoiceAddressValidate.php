<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class OwnerToInvoiceAddressValidate
{
    protected static $alias = [
        'id' => '',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'owner_id' => '货主id',
        'invoice_address_id' => '实际付款方id',
        'create_user_name' => '创建人用户名',
        'create_user_code' => '创建人code',
        'create_time' => '创建时间',
        'update_time' => '最后更新时间',
        
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
