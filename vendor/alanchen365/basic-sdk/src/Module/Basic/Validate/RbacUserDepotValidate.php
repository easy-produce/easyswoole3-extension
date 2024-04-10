<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class RbacUserDepotValidate
{
    protected static $alias = [
        'id' => '',
        'app_code' => '帐套唯一编码，由程序自动生成',
        'user_code' => '用户',
        'depot_code' => '仓库',
        'create_time' => '创建时间',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacUserDepotValidate::$alias['id']);
        // $validate->addColumn('app_code', RbacUserDepotValidate::$alias['app_code']);
        // $validate->addColumn('user_code', RbacUserDepotValidate::$alias['user_code']);
        // $validate->addColumn('depot_code', RbacUserDepotValidate::$alias['depot_code']);
        // $validate->addColumn('create_time', RbacUserDepotValidate::$alias['create_time']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacUserDepotValidate::$alias['id']);
        // $validate->addColumn('app_code', RbacUserDepotValidate::$alias['app_code']);
        // $validate->addColumn('user_code', RbacUserDepotValidate::$alias['user_code']);
        // $validate->addColumn('depot_code', RbacUserDepotValidate::$alias['depot_code']);
        // $validate->addColumn('create_time', RbacUserDepotValidate::$alias['create_time']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacUserDepotValidate::$alias['id']);
        // $validate->addColumn('app_code', RbacUserDepotValidate::$alias['app_code']);
        // $validate->addColumn('user_code', RbacUserDepotValidate::$alias['user_code']);
        // $validate->addColumn('depot_code', RbacUserDepotValidate::$alias['depot_code']);
        // $validate->addColumn('create_time', RbacUserDepotValidate::$alias['create_time']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacUserDepotValidate::$alias['id']);
        // $validate->addColumn('app_code', RbacUserDepotValidate::$alias['app_code']);
        // $validate->addColumn('user_code', RbacUserDepotValidate::$alias['user_code']);
        // $validate->addColumn('depot_code', RbacUserDepotValidate::$alias['depot_code']);
        // $validate->addColumn('create_time', RbacUserDepotValidate::$alias['create_time']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', RbacUserDepotValidate::$alias['id']);
        // $validate->addColumn('app_code', RbacUserDepotValidate::$alias['app_code']);
        // $validate->addColumn('user_code', RbacUserDepotValidate::$alias['user_code']);
        // $validate->addColumn('depot_code', RbacUserDepotValidate::$alias['depot_code']);
        // $validate->addColumn('create_time', RbacUserDepotValidate::$alias['create_time']);
        
        return $validate;
    }
}
