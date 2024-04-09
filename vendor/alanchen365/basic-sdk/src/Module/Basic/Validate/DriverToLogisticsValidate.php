<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class DriverToLogisticsValidate
{
    protected static $alias = [
        'id' => '',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'driver_id' => '司机id',
        'logistics_id' => '物流商id',
        'create_user_name' => '创建人用户名',
        'create_user_code' => '创建人code',
        'create_time' => '创建时间',
        'update_time' => '最后更新时间',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', DriverToLogisticsValidate::$alias['id']);
        // $validate->addColumn('app_code', DriverToLogisticsValidate::$alias['app_code']);
        // $validate->addColumn('driver_id', DriverToLogisticsValidate::$alias['driver_id']);
        // $validate->addColumn('logistics_id', DriverToLogisticsValidate::$alias['logistics_id']);
        // $validate->addColumn('create_user_name', DriverToLogisticsValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', DriverToLogisticsValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', DriverToLogisticsValidate::$alias['create_time']);
        // $validate->addColumn('update_time', DriverToLogisticsValidate::$alias['update_time']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', DriverToLogisticsValidate::$alias['id']);
        // $validate->addColumn('app_code', DriverToLogisticsValidate::$alias['app_code']);
        // $validate->addColumn('driver_id', DriverToLogisticsValidate::$alias['driver_id']);
        // $validate->addColumn('logistics_id', DriverToLogisticsValidate::$alias['logistics_id']);
        // $validate->addColumn('create_user_name', DriverToLogisticsValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', DriverToLogisticsValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', DriverToLogisticsValidate::$alias['create_time']);
        // $validate->addColumn('update_time', DriverToLogisticsValidate::$alias['update_time']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', DriverToLogisticsValidate::$alias['id']);
        // $validate->addColumn('app_code', DriverToLogisticsValidate::$alias['app_code']);
        // $validate->addColumn('driver_id', DriverToLogisticsValidate::$alias['driver_id']);
        // $validate->addColumn('logistics_id', DriverToLogisticsValidate::$alias['logistics_id']);
        // $validate->addColumn('create_user_name', DriverToLogisticsValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', DriverToLogisticsValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', DriverToLogisticsValidate::$alias['create_time']);
        // $validate->addColumn('update_time', DriverToLogisticsValidate::$alias['update_time']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', DriverToLogisticsValidate::$alias['id']);
        // $validate->addColumn('app_code', DriverToLogisticsValidate::$alias['app_code']);
        // $validate->addColumn('driver_id', DriverToLogisticsValidate::$alias['driver_id']);
        // $validate->addColumn('logistics_id', DriverToLogisticsValidate::$alias['logistics_id']);
        // $validate->addColumn('create_user_name', DriverToLogisticsValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', DriverToLogisticsValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', DriverToLogisticsValidate::$alias['create_time']);
        // $validate->addColumn('update_time', DriverToLogisticsValidate::$alias['update_time']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', DriverToLogisticsValidate::$alias['id']);
        // $validate->addColumn('app_code', DriverToLogisticsValidate::$alias['app_code']);
        // $validate->addColumn('driver_id', DriverToLogisticsValidate::$alias['driver_id']);
        // $validate->addColumn('logistics_id', DriverToLogisticsValidate::$alias['logistics_id']);
        // $validate->addColumn('create_user_name', DriverToLogisticsValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', DriverToLogisticsValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', DriverToLogisticsValidate::$alias['create_time']);
        // $validate->addColumn('update_time', DriverToLogisticsValidate::$alias['update_time']);
        
        return $validate;
    }
}
