<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class OrganUserValidate
{
    protected static $alias = [
        'id' => '',
        'organ_id' => '关联组织ID',
        'user_name' => '',
        'user_id' => '用户id',
        'modify_time' => '更新时间',
        'modify_user' => '更新人',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OrganUserValidate::$alias['id']);
        // $validate->addColumn('organ_id', OrganUserValidate::$alias['organ_id']);
        // $validate->addColumn('user_name', OrganUserValidate::$alias['user_name']);
        // $validate->addColumn('user_id', OrganUserValidate::$alias['user_id']);
        // $validate->addColumn('modify_time', OrganUserValidate::$alias['modify_time']);
        // $validate->addColumn('modify_user', OrganUserValidate::$alias['modify_user']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OrganUserValidate::$alias['id']);
        // $validate->addColumn('organ_id', OrganUserValidate::$alias['organ_id']);
        // $validate->addColumn('user_name', OrganUserValidate::$alias['user_name']);
        // $validate->addColumn('user_id', OrganUserValidate::$alias['user_id']);
        // $validate->addColumn('modify_time', OrganUserValidate::$alias['modify_time']);
        // $validate->addColumn('modify_user', OrganUserValidate::$alias['modify_user']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OrganUserValidate::$alias['id']);
        // $validate->addColumn('organ_id', OrganUserValidate::$alias['organ_id']);
        // $validate->addColumn('user_name', OrganUserValidate::$alias['user_name']);
        // $validate->addColumn('user_id', OrganUserValidate::$alias['user_id']);
        // $validate->addColumn('modify_time', OrganUserValidate::$alias['modify_time']);
        // $validate->addColumn('modify_user', OrganUserValidate::$alias['modify_user']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OrganUserValidate::$alias['id']);
        // $validate->addColumn('organ_id', OrganUserValidate::$alias['organ_id']);
        // $validate->addColumn('user_name', OrganUserValidate::$alias['user_name']);
        // $validate->addColumn('user_id', OrganUserValidate::$alias['user_id']);
        // $validate->addColumn('modify_time', OrganUserValidate::$alias['modify_time']);
        // $validate->addColumn('modify_user', OrganUserValidate::$alias['modify_user']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OrganUserValidate::$alias['id']);
        // $validate->addColumn('organ_id', OrganUserValidate::$alias['organ_id']);
        // $validate->addColumn('user_name', OrganUserValidate::$alias['user_name']);
        // $validate->addColumn('user_id', OrganUserValidate::$alias['user_id']);
        // $validate->addColumn('modify_time', OrganUserValidate::$alias['modify_time']);
        // $validate->addColumn('modify_user', OrganUserValidate::$alias['modify_user']);
        
        return $validate;
    }
}
