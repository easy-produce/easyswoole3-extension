<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class ProductValidate
{
    protected static $alias = [
        'id' => '',
        'code' => '唯一编码',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'owner_code' => '货主编码',
        'pno' => '产品编号',
        'name' => '产品名称',
        'third_code' => '第三方产品id',
        'brand_code' => '品牌编码',
        'conversion_rate' => '产品最大转换率',
        'py_code' => '拼音简码',
        'py_all_code' => '拼音全码',
        'bar_code' => '条码',
        'storage' => '保存方法',
        'shelf_life' => '保质期',
        'shelf_life_type' => '保质期类型',
        'effective_type' => '有效类型',
        'shelf_life_day' => '保质期天数',
        'place' => '产地',
        'tax_rate' => '税率',
        'img_url' => '产品图片',
        'status' => '状态',
        'save_type' => '保温方式',
        'property' => '商品属性 ',
        'code_type' => '抄码类型 ',
        'create_user_name' => '创建人用户名',
        'create_user_code' => '创建人code',
        'create_time' => '创建时间',
        'update_time' => '最后更新时间',
        'delete_flg' => '是否删除',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductValidate::$alias['id']);
        // $validate->addColumn('code', ProductValidate::$alias['code']);
        // $validate->addColumn('app_code', ProductValidate::$alias['app_code']);
        // $validate->addColumn('owner_code', ProductValidate::$alias['owner_code']);
        // $validate->addColumn('pno', ProductValidate::$alias['pno']);
        // $validate->addColumn('name', ProductValidate::$alias['name']);
        // $validate->addColumn('third_code', ProductValidate::$alias['third_code']);
        // $validate->addColumn('brand_code', ProductValidate::$alias['brand_code']);
        // $validate->addColumn('conversion_rate', ProductValidate::$alias['conversion_rate']);
        // $validate->addColumn('py_code', ProductValidate::$alias['py_code']);
        // $validate->addColumn('py_all_code', ProductValidate::$alias['py_all_code']);
        // $validate->addColumn('bar_code', ProductValidate::$alias['bar_code']);
        // $validate->addColumn('storage', ProductValidate::$alias['storage']);
        // $validate->addColumn('shelf_life', ProductValidate::$alias['shelf_life']);
        // $validate->addColumn('shelf_life_type', ProductValidate::$alias['shelf_life_type']);
        // $validate->addColumn('effective_type', ProductValidate::$alias['effective_type']);
        // $validate->addColumn('shelf_life_day', ProductValidate::$alias['shelf_life_day']);
        // $validate->addColumn('place', ProductValidate::$alias['place']);
        // $validate->addColumn('tax_rate', ProductValidate::$alias['tax_rate']);
        // $validate->addColumn('img_url', ProductValidate::$alias['img_url']);
        // $validate->addColumn('status', ProductValidate::$alias['status']);
        // $validate->addColumn('save_type', ProductValidate::$alias['save_type']);
        // $validate->addColumn('property', ProductValidate::$alias['property']);
        // $validate->addColumn('code_type', ProductValidate::$alias['code_type']);
        // $validate->addColumn('create_user_name', ProductValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', ProductValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', ProductValidate::$alias['create_time']);
        // $validate->addColumn('update_time', ProductValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', ProductValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductValidate::$alias['id']);
        // $validate->addColumn('code', ProductValidate::$alias['code']);
        // $validate->addColumn('app_code', ProductValidate::$alias['app_code']);
        // $validate->addColumn('owner_code', ProductValidate::$alias['owner_code']);
        // $validate->addColumn('pno', ProductValidate::$alias['pno']);
        // $validate->addColumn('name', ProductValidate::$alias['name']);
        // $validate->addColumn('third_code', ProductValidate::$alias['third_code']);
        // $validate->addColumn('brand_code', ProductValidate::$alias['brand_code']);
        // $validate->addColumn('conversion_rate', ProductValidate::$alias['conversion_rate']);
        // $validate->addColumn('py_code', ProductValidate::$alias['py_code']);
        // $validate->addColumn('py_all_code', ProductValidate::$alias['py_all_code']);
        // $validate->addColumn('bar_code', ProductValidate::$alias['bar_code']);
        // $validate->addColumn('storage', ProductValidate::$alias['storage']);
        // $validate->addColumn('shelf_life', ProductValidate::$alias['shelf_life']);
        // $validate->addColumn('shelf_life_type', ProductValidate::$alias['shelf_life_type']);
        // $validate->addColumn('effective_type', ProductValidate::$alias['effective_type']);
        // $validate->addColumn('shelf_life_day', ProductValidate::$alias['shelf_life_day']);
        // $validate->addColumn('place', ProductValidate::$alias['place']);
        // $validate->addColumn('tax_rate', ProductValidate::$alias['tax_rate']);
        // $validate->addColumn('img_url', ProductValidate::$alias['img_url']);
        // $validate->addColumn('status', ProductValidate::$alias['status']);
        // $validate->addColumn('save_type', ProductValidate::$alias['save_type']);
        // $validate->addColumn('property', ProductValidate::$alias['property']);
        // $validate->addColumn('code_type', ProductValidate::$alias['code_type']);
        // $validate->addColumn('create_user_name', ProductValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', ProductValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', ProductValidate::$alias['create_time']);
        // $validate->addColumn('update_time', ProductValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', ProductValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductValidate::$alias['id']);
        // $validate->addColumn('code', ProductValidate::$alias['code']);
        // $validate->addColumn('app_code', ProductValidate::$alias['app_code']);
        // $validate->addColumn('owner_code', ProductValidate::$alias['owner_code']);
        // $validate->addColumn('pno', ProductValidate::$alias['pno']);
        // $validate->addColumn('name', ProductValidate::$alias['name']);
        // $validate->addColumn('third_code', ProductValidate::$alias['third_code']);
        // $validate->addColumn('brand_code', ProductValidate::$alias['brand_code']);
        // $validate->addColumn('conversion_rate', ProductValidate::$alias['conversion_rate']);
        // $validate->addColumn('py_code', ProductValidate::$alias['py_code']);
        // $validate->addColumn('py_all_code', ProductValidate::$alias['py_all_code']);
        // $validate->addColumn('bar_code', ProductValidate::$alias['bar_code']);
        // $validate->addColumn('storage', ProductValidate::$alias['storage']);
        // $validate->addColumn('shelf_life', ProductValidate::$alias['shelf_life']);
        // $validate->addColumn('shelf_life_type', ProductValidate::$alias['shelf_life_type']);
        // $validate->addColumn('effective_type', ProductValidate::$alias['effective_type']);
        // $validate->addColumn('shelf_life_day', ProductValidate::$alias['shelf_life_day']);
        // $validate->addColumn('place', ProductValidate::$alias['place']);
        // $validate->addColumn('tax_rate', ProductValidate::$alias['tax_rate']);
        // $validate->addColumn('img_url', ProductValidate::$alias['img_url']);
        // $validate->addColumn('status', ProductValidate::$alias['status']);
        // $validate->addColumn('save_type', ProductValidate::$alias['save_type']);
        // $validate->addColumn('property', ProductValidate::$alias['property']);
        // $validate->addColumn('code_type', ProductValidate::$alias['code_type']);
        // $validate->addColumn('create_user_name', ProductValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', ProductValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', ProductValidate::$alias['create_time']);
        // $validate->addColumn('update_time', ProductValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', ProductValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductValidate::$alias['id']);
        // $validate->addColumn('code', ProductValidate::$alias['code']);
        // $validate->addColumn('app_code', ProductValidate::$alias['app_code']);
        // $validate->addColumn('owner_code', ProductValidate::$alias['owner_code']);
        // $validate->addColumn('pno', ProductValidate::$alias['pno']);
        // $validate->addColumn('name', ProductValidate::$alias['name']);
        // $validate->addColumn('third_code', ProductValidate::$alias['third_code']);
        // $validate->addColumn('brand_code', ProductValidate::$alias['brand_code']);
        // $validate->addColumn('conversion_rate', ProductValidate::$alias['conversion_rate']);
        // $validate->addColumn('py_code', ProductValidate::$alias['py_code']);
        // $validate->addColumn('py_all_code', ProductValidate::$alias['py_all_code']);
        // $validate->addColumn('bar_code', ProductValidate::$alias['bar_code']);
        // $validate->addColumn('storage', ProductValidate::$alias['storage']);
        // $validate->addColumn('shelf_life', ProductValidate::$alias['shelf_life']);
        // $validate->addColumn('shelf_life_type', ProductValidate::$alias['shelf_life_type']);
        // $validate->addColumn('effective_type', ProductValidate::$alias['effective_type']);
        // $validate->addColumn('shelf_life_day', ProductValidate::$alias['shelf_life_day']);
        // $validate->addColumn('place', ProductValidate::$alias['place']);
        // $validate->addColumn('tax_rate', ProductValidate::$alias['tax_rate']);
        // $validate->addColumn('img_url', ProductValidate::$alias['img_url']);
        // $validate->addColumn('status', ProductValidate::$alias['status']);
        // $validate->addColumn('save_type', ProductValidate::$alias['save_type']);
        // $validate->addColumn('property', ProductValidate::$alias['property']);
        // $validate->addColumn('code_type', ProductValidate::$alias['code_type']);
        // $validate->addColumn('create_user_name', ProductValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', ProductValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', ProductValidate::$alias['create_time']);
        // $validate->addColumn('update_time', ProductValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', ProductValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ProductValidate::$alias['id']);
        // $validate->addColumn('code', ProductValidate::$alias['code']);
        // $validate->addColumn('app_code', ProductValidate::$alias['app_code']);
        // $validate->addColumn('owner_code', ProductValidate::$alias['owner_code']);
        // $validate->addColumn('pno', ProductValidate::$alias['pno']);
        // $validate->addColumn('name', ProductValidate::$alias['name']);
        // $validate->addColumn('third_code', ProductValidate::$alias['third_code']);
        // $validate->addColumn('brand_code', ProductValidate::$alias['brand_code']);
        // $validate->addColumn('conversion_rate', ProductValidate::$alias['conversion_rate']);
        // $validate->addColumn('py_code', ProductValidate::$alias['py_code']);
        // $validate->addColumn('py_all_code', ProductValidate::$alias['py_all_code']);
        // $validate->addColumn('bar_code', ProductValidate::$alias['bar_code']);
        // $validate->addColumn('storage', ProductValidate::$alias['storage']);
        // $validate->addColumn('shelf_life', ProductValidate::$alias['shelf_life']);
        // $validate->addColumn('shelf_life_type', ProductValidate::$alias['shelf_life_type']);
        // $validate->addColumn('effective_type', ProductValidate::$alias['effective_type']);
        // $validate->addColumn('shelf_life_day', ProductValidate::$alias['shelf_life_day']);
        // $validate->addColumn('place', ProductValidate::$alias['place']);
        // $validate->addColumn('tax_rate', ProductValidate::$alias['tax_rate']);
        // $validate->addColumn('img_url', ProductValidate::$alias['img_url']);
        // $validate->addColumn('status', ProductValidate::$alias['status']);
        // $validate->addColumn('save_type', ProductValidate::$alias['save_type']);
        // $validate->addColumn('property', ProductValidate::$alias['property']);
        // $validate->addColumn('code_type', ProductValidate::$alias['code_type']);
        // $validate->addColumn('create_user_name', ProductValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', ProductValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', ProductValidate::$alias['create_time']);
        // $validate->addColumn('update_time', ProductValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', ProductValidate::$alias['delete_flg']);
        
        return $validate;
    }
}
