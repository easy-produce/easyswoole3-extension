<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class OwnerDepotValidate
{
    protected static $alias = [
        'id' => '',
        'owner_code' => '货主code',
        'depot_code' => '仓库code',
        'create_time' => '创建时间',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OwnerDepotValidate::$alias['id']);
        // $validate->addColumn('owner_code', OwnerDepotValidate::$alias['owner_code']);
        // $validate->addColumn('depot_code', OwnerDepotValidate::$alias['depot_code']);
        // $validate->addColumn('create_time', OwnerDepotValidate::$alias['create_time']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OwnerDepotValidate::$alias['id']);
        // $validate->addColumn('owner_code', OwnerDepotValidate::$alias['owner_code']);
        // $validate->addColumn('depot_code', OwnerDepotValidate::$alias['depot_code']);
        // $validate->addColumn('create_time', OwnerDepotValidate::$alias['create_time']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OwnerDepotValidate::$alias['id']);
        // $validate->addColumn('owner_code', OwnerDepotValidate::$alias['owner_code']);
        // $validate->addColumn('depot_code', OwnerDepotValidate::$alias['depot_code']);
        // $validate->addColumn('create_time', OwnerDepotValidate::$alias['create_time']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OwnerDepotValidate::$alias['id']);
        // $validate->addColumn('owner_code', OwnerDepotValidate::$alias['owner_code']);
        // $validate->addColumn('depot_code', OwnerDepotValidate::$alias['depot_code']);
        // $validate->addColumn('create_time', OwnerDepotValidate::$alias['create_time']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OwnerDepotValidate::$alias['id']);
        // $validate->addColumn('owner_code', OwnerDepotValidate::$alias['owner_code']);
        // $validate->addColumn('depot_code', OwnerDepotValidate::$alias['depot_code']);
        // $validate->addColumn('create_time', OwnerDepotValidate::$alias['create_time']);
        
        return $validate;
    }
}
