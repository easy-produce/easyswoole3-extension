<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class DepotAreasValidate
{
    protected static $alias = [
        'id' => '',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'depot_code' => '仓库code',
        'pathid' => '区域编号',
        'create_user_name' => '创建人用户名',
        'create_user_code' => '创建人code',
        'create_time' => '创建时间',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', DepotAreasValidate::$alias['id']);
        // $validate->addColumn('app_code', DepotAreasValidate::$alias['app_code']);
        // $validate->addColumn('depot_code', DepotAreasValidate::$alias['depot_code']);
        // $validate->addColumn('pathid', DepotAreasValidate::$alias['pathid']);
        // $validate->addColumn('create_user_name', DepotAreasValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', DepotAreasValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', DepotAreasValidate::$alias['create_time']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', DepotAreasValidate::$alias['id']);
        // $validate->addColumn('app_code', DepotAreasValidate::$alias['app_code']);
        // $validate->addColumn('depot_code', DepotAreasValidate::$alias['depot_code']);
        // $validate->addColumn('pathid', DepotAreasValidate::$alias['pathid']);
        // $validate->addColumn('create_user_name', DepotAreasValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', DepotAreasValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', DepotAreasValidate::$alias['create_time']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', DepotAreasValidate::$alias['id']);
        // $validate->addColumn('app_code', DepotAreasValidate::$alias['app_code']);
        // $validate->addColumn('depot_code', DepotAreasValidate::$alias['depot_code']);
        // $validate->addColumn('pathid', DepotAreasValidate::$alias['pathid']);
        // $validate->addColumn('create_user_name', DepotAreasValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', DepotAreasValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', DepotAreasValidate::$alias['create_time']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', DepotAreasValidate::$alias['id']);
        // $validate->addColumn('app_code', DepotAreasValidate::$alias['app_code']);
        // $validate->addColumn('depot_code', DepotAreasValidate::$alias['depot_code']);
        // $validate->addColumn('pathid', DepotAreasValidate::$alias['pathid']);
        // $validate->addColumn('create_user_name', DepotAreasValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', DepotAreasValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', DepotAreasValidate::$alias['create_time']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', DepotAreasValidate::$alias['id']);
        // $validate->addColumn('app_code', DepotAreasValidate::$alias['app_code']);
        // $validate->addColumn('depot_code', DepotAreasValidate::$alias['depot_code']);
        // $validate->addColumn('pathid', DepotAreasValidate::$alias['pathid']);
        // $validate->addColumn('create_user_name', DepotAreasValidate::$alias['create_user_name']);
        // $validate->addColumn('create_user_code', DepotAreasValidate::$alias['create_user_code']);
        // $validate->addColumn('create_time', DepotAreasValidate::$alias['create_time']);
        
        return $validate;
    }
}
