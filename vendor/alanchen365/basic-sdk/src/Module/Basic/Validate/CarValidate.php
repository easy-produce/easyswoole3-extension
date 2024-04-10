<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class CarValidate
{
    protected static $alias = [
        'id' => '',
        'code' => '唯一编码',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'logistics_code' => '物流商编码',
        'car_model_code' => '车型编码',
        'm' => '车型米数',
        'car_no' => '车牌号',
        'travel' => '行驶证',
        'transport' => '道路运输证',
        'gps_device_code' => '默认gps设备编码',
        'status' => '状态',
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

        // $validate->addColumn('id', CarValidate::$alias['id']);
        // $validate->addColumn('code', CarValidate::$alias['code']);
        // $validate->addColumn('app_code', CarValidate::$alias['app_code']);
        // $validate->addColumn('logistics_code', CarValidate::$alias['logistics_code']);
        // $validate->addColumn('car_model_code', CarValidate::$alias['car_model_code']);
        // $validate->addColumn('m', CarValidate::$alias['m']);
        // $validate->addColumn('car_no', CarValidate::$alias['car_no']);
        // $validate->addColumn('travel', CarValidate::$alias['travel']);
        // $validate->addColumn('transport', CarValidate::$alias['transport']);
        // $validate->addColumn('gps_device_code', CarValidate::$alias['gps_device_code']);
        // $validate->addColumn('status', CarValidate::$alias['status']);
        // $validate->addColumn('remark', CarValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', CarValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', CarValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', CarValidate::$alias['create_time']);
        // $validate->addColumn('update_time', CarValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', CarValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', CarValidate::$alias['id']);
        // $validate->addColumn('code', CarValidate::$alias['code']);
        // $validate->addColumn('app_code', CarValidate::$alias['app_code']);
        // $validate->addColumn('logistics_code', CarValidate::$alias['logistics_code']);
        // $validate->addColumn('car_model_code', CarValidate::$alias['car_model_code']);
        // $validate->addColumn('m', CarValidate::$alias['m']);
        // $validate->addColumn('car_no', CarValidate::$alias['car_no']);
        // $validate->addColumn('travel', CarValidate::$alias['travel']);
        // $validate->addColumn('transport', CarValidate::$alias['transport']);
        // $validate->addColumn('gps_device_code', CarValidate::$alias['gps_device_code']);
        // $validate->addColumn('status', CarValidate::$alias['status']);
        // $validate->addColumn('remark', CarValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', CarValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', CarValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', CarValidate::$alias['create_time']);
        // $validate->addColumn('update_time', CarValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', CarValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', CarValidate::$alias['id']);
        // $validate->addColumn('code', CarValidate::$alias['code']);
        // $validate->addColumn('app_code', CarValidate::$alias['app_code']);
        // $validate->addColumn('logistics_code', CarValidate::$alias['logistics_code']);
        // $validate->addColumn('car_model_code', CarValidate::$alias['car_model_code']);
        // $validate->addColumn('m', CarValidate::$alias['m']);
        // $validate->addColumn('car_no', CarValidate::$alias['car_no']);
        // $validate->addColumn('travel', CarValidate::$alias['travel']);
        // $validate->addColumn('transport', CarValidate::$alias['transport']);
        // $validate->addColumn('gps_device_code', CarValidate::$alias['gps_device_code']);
        // $validate->addColumn('status', CarValidate::$alias['status']);
        // $validate->addColumn('remark', CarValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', CarValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', CarValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', CarValidate::$alias['create_time']);
        // $validate->addColumn('update_time', CarValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', CarValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', CarValidate::$alias['id']);
        // $validate->addColumn('code', CarValidate::$alias['code']);
        // $validate->addColumn('app_code', CarValidate::$alias['app_code']);
        // $validate->addColumn('logistics_code', CarValidate::$alias['logistics_code']);
        // $validate->addColumn('car_model_code', CarValidate::$alias['car_model_code']);
        // $validate->addColumn('m', CarValidate::$alias['m']);
        // $validate->addColumn('car_no', CarValidate::$alias['car_no']);
        // $validate->addColumn('travel', CarValidate::$alias['travel']);
        // $validate->addColumn('transport', CarValidate::$alias['transport']);
        // $validate->addColumn('gps_device_code', CarValidate::$alias['gps_device_code']);
        // $validate->addColumn('status', CarValidate::$alias['status']);
        // $validate->addColumn('remark', CarValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', CarValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', CarValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', CarValidate::$alias['create_time']);
        // $validate->addColumn('update_time', CarValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', CarValidate::$alias['delete_flg']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', CarValidate::$alias['id']);
        // $validate->addColumn('code', CarValidate::$alias['code']);
        // $validate->addColumn('app_code', CarValidate::$alias['app_code']);
        // $validate->addColumn('logistics_code', CarValidate::$alias['logistics_code']);
        // $validate->addColumn('car_model_code', CarValidate::$alias['car_model_code']);
        // $validate->addColumn('m', CarValidate::$alias['m']);
        // $validate->addColumn('car_no', CarValidate::$alias['car_no']);
        // $validate->addColumn('travel', CarValidate::$alias['travel']);
        // $validate->addColumn('transport', CarValidate::$alias['transport']);
        // $validate->addColumn('gps_device_code', CarValidate::$alias['gps_device_code']);
        // $validate->addColumn('status', CarValidate::$alias['status']);
        // $validate->addColumn('remark', CarValidate::$alias['remark']);
        // $validate->addColumn('create_user_name', CarValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', CarValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', CarValidate::$alias['create_time']);
        // $validate->addColumn('update_time', CarValidate::$alias['update_time']);
        // $validate->addColumn('delete_flg', CarValidate::$alias['delete_flg']);
        
        return $validate;
    }
}
