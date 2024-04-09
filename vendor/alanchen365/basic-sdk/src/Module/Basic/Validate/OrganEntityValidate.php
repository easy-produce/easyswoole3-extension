<?php

namespace App\Module\Basic\Validate;

use EasySwoole\Validate\Validate;

class OrganEntityValidate
{
    protected static $alias = [
        'id' => 'ID',
        'entity_id' => '关联ID',
        'entity_type' => '实体类型',
        'organ_id' => '关联组织ID',
        
    ];

    public function index(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OrganEntityValidate::$alias['id']);
        // $validate->addColumn('entity_id', OrganEntityValidate::$alias['entity_id']);
        // $validate->addColumn('entity_type', OrganEntityValidate::$alias['entity_type']);
        // $validate->addColumn('organ_id', OrganEntityValidate::$alias['organ_id']);
        
        return $validate;
    }

    public function get(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OrganEntityValidate::$alias['id']);
        // $validate->addColumn('entity_id', OrganEntityValidate::$alias['entity_id']);
        // $validate->addColumn('entity_type', OrganEntityValidate::$alias['entity_type']);
        // $validate->addColumn('organ_id', OrganEntityValidate::$alias['organ_id']);
        
        return $validate;
    }

    public function save(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OrganEntityValidate::$alias['id']);
        // $validate->addColumn('entity_id', OrganEntityValidate::$alias['entity_id']);
        // $validate->addColumn('entity_type', OrganEntityValidate::$alias['entity_type']);
        // $validate->addColumn('organ_id', OrganEntityValidate::$alias['organ_id']);
        
        return $validate;
    }

    public function update(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OrganEntityValidate::$alias['id']);
        // $validate->addColumn('entity_id', OrganEntityValidate::$alias['entity_id']);
        // $validate->addColumn('entity_type', OrganEntityValidate::$alias['entity_type']);
        // $validate->addColumn('organ_id', OrganEntityValidate::$alias['organ_id']);
        
        return $validate;
    }

    public function delete(array $params): ?Validate
    {
        $validate = new Validate();

        // $validate->addColumn('id', OrganEntityValidate::$alias['id']);
        // $validate->addColumn('entity_id', OrganEntityValidate::$alias['entity_id']);
        // $validate->addColumn('entity_type', OrganEntityValidate::$alias['entity_type']);
        // $validate->addColumn('organ_id', OrganEntityValidate::$alias['organ_id']);
        
        return $validate;
    }
}
