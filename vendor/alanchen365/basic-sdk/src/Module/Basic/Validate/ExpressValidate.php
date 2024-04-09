<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class ExpressValidate
{
    protected static $alias = [
        'id' => '',
        'code' => '唯一编码',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'name' => '快递商名称',
        'jst_name' => '聚水潭快递名称',
        'jst_code' => '聚水潭快递code',
        'kdniao_code' => '快递鸟code',
        'kdniao_info' => '快递鸟其他信息JSON',
        'print_flg' => '是否可以打印',
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

        // $validate->addColumn('id', ExpressValidate::$alias['id']);
        // $validate->addColumn('code', ExpressValidate::$alias['code']);
        // $validate->addColumn('app_code', ExpressValidate::$alias['app_code']);
        // $validate->addColumn('name', ExpressValidate::$alias['name']);
        // $validate->addColumn('jst_name', ExpressValidate::$alias['jst_name']);
        // $validate->addColumn('jst_code', ExpressValidate::$alias['jst_code']);
        // $validate->addColumn('kdniao_code', ExpressValidate::$alias['kdniao_code']);
        // $validate->addColumn('kdniao_info', ExpressValidate::$alias['kdniao_info']);
        // $validate->addColumn('print_flg', ExpressValidate::$alias['print_flg']);
        // $validate->addColumn('remark', ExpressValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', ExpressValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', ExpressValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', ExpressValidate::$alias['create_time']);
        // $validate->addColumn('update_time', ExpressValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', ExpressValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ExpressValidate::$alias['id']);
        // $validate->addColumn('code', ExpressValidate::$alias['code']);
        // $validate->addColumn('app_code', ExpressValidate::$alias['app_code']);
        // $validate->addColumn('name', ExpressValidate::$alias['name']);
        // $validate->addColumn('jst_name', ExpressValidate::$alias['jst_name']);
        // $validate->addColumn('jst_code', ExpressValidate::$alias['jst_code']);
        // $validate->addColumn('kdniao_code', ExpressValidate::$alias['kdniao_code']);
        // $validate->addColumn('kdniao_info', ExpressValidate::$alias['kdniao_info']);
        // $validate->addColumn('print_flg', ExpressValidate::$alias['print_flg']);
        // $validate->addColumn('remark', ExpressValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', ExpressValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', ExpressValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', ExpressValidate::$alias['create_time']);
        // $validate->addColumn('update_time', ExpressValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', ExpressValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ExpressValidate::$alias['id']);
        // $validate->addColumn('code', ExpressValidate::$alias['code']);
        // $validate->addColumn('app_code', ExpressValidate::$alias['app_code']);
        // $validate->addColumn('name', ExpressValidate::$alias['name']);
        // $validate->addColumn('jst_name', ExpressValidate::$alias['jst_name']);
        // $validate->addColumn('jst_code', ExpressValidate::$alias['jst_code']);
        // $validate->addColumn('kdniao_code', ExpressValidate::$alias['kdniao_code']);
        // $validate->addColumn('kdniao_info', ExpressValidate::$alias['kdniao_info']);
        // $validate->addColumn('print_flg', ExpressValidate::$alias['print_flg']);
        // $validate->addColumn('remark', ExpressValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', ExpressValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', ExpressValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', ExpressValidate::$alias['create_time']);
        // $validate->addColumn('update_time', ExpressValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', ExpressValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ExpressValidate::$alias['id']);
        // $validate->addColumn('code', ExpressValidate::$alias['code']);
        // $validate->addColumn('app_code', ExpressValidate::$alias['app_code']);
        // $validate->addColumn('name', ExpressValidate::$alias['name']);
        // $validate->addColumn('jst_name', ExpressValidate::$alias['jst_name']);
        // $validate->addColumn('jst_code', ExpressValidate::$alias['jst_code']);
        // $validate->addColumn('kdniao_code', ExpressValidate::$alias['kdniao_code']);
        // $validate->addColumn('kdniao_info', ExpressValidate::$alias['kdniao_info']);
        // $validate->addColumn('print_flg', ExpressValidate::$alias['print_flg']);
        // $validate->addColumn('remark', ExpressValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', ExpressValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', ExpressValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', ExpressValidate::$alias['create_time']);
        // $validate->addColumn('update_time', ExpressValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', ExpressValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', ExpressValidate::$alias['id']);
        // $validate->addColumn('code', ExpressValidate::$alias['code']);
        // $validate->addColumn('app_code', ExpressValidate::$alias['app_code']);
        // $validate->addColumn('name', ExpressValidate::$alias['name']);
        // $validate->addColumn('jst_name', ExpressValidate::$alias['jst_name']);
        // $validate->addColumn('jst_code', ExpressValidate::$alias['jst_code']);
        // $validate->addColumn('kdniao_code', ExpressValidate::$alias['kdniao_code']);
        // $validate->addColumn('kdniao_info', ExpressValidate::$alias['kdniao_info']);
        // $validate->addColumn('print_flg', ExpressValidate::$alias['print_flg']);
        // $validate->addColumn('remark', ExpressValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', ExpressValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', ExpressValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', ExpressValidate::$alias['create_time']);
        // $validate->addColumn('update_time', ExpressValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', ExpressValidate::$alias['delete_flg']);
        
        return $validate;
    }
}
