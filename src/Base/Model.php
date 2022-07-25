<?php

namespace Es3\Base;

use App\Constant\AppConst;
use EasySwoole\ORM\AbstractModel;
use EasySwoole\ORM\Db\ClientInterface;
use EasySwoole\ORM\DbManager;
use EasySwoole\ORM\Utility\Schema\Table;
use Es3\EsUtility;

class Model extends AbstractModel
{
    protected $autoTimeStamp = false;

    protected $createTime = false;

    protected $updateTime = false;

    /**
     * 调整where条件
     */
    public function adjustWhere(array $params): array
    {
        $schemaInfo = $this->schemaInfo();
        $columns = $schemaInfo->getColumns();

        foreach ($params as $field => $value) {
            /** 如果不是该字段的数据 自动删除掉 */
            if (!isset($columns[$field])) {
                unset($params[$field]);
            }
        }

        return $params;
    }

    public function autoCreateUser($params): array
    {
        $schemaInfo = $this->schemaInfo();
        $columns = $schemaInfo->getColumns();

        $paramsKeys = array_keys($params);
        foreach ($columns as $key => $column) {

            /** 如果外界传进来user code 就不自动增加 */
            if (!array_intersect($paramsKeys, AppConst::TABLE_AUTO_CREATE_USER_CODE)) {
                /** 增加user code */
                if (in_array($key, AppConst::TABLE_AUTO_CREATE_USER_CODE) && createUserCode()) {
                    $params[$key] = createUserCode();
                }

                /** 增加user name */
                if (in_array($key, AppConst::TABLE_AUTO_CREATE_USER_NAME) && createUserName()) {
                    $params[$key] = createUserName();
                }
            }
        }

        return $params;
    }

    public function autoUpdateUser($params): array
    {
        $schemaInfo = $this->schemaInfo();
        $columns = $schemaInfo->getColumns();

        $paramsKeys = array_keys($params);

        foreach ($columns as $key => $column) {

            if (array_intersect($paramsKeys, AppConst::TABLE_AUTO_CREATE_USER_CODE)) {
                /** 增加user code */
                if (in_array($key, AppConst::TABLE_AUTO_UPDATE_USER_CODE) && createUserCode()) {
                    $params[$key] = createUserCode();
                }
            }

            if (array_intersect($paramsKeys, AppConst::TABLE_AUTO_UPDATE_USER_NAME)) {
                /** 增加user name */
                if (in_array($key, AppConst::TABLE_AUTO_UPDATE_USER_NAME) && createUserName()) {
                    $params[$key] = createUserName();
                }
            }
        }

        return $params;
    }

    /**
     * 获取逻辑标志
     */
    public function getLogicDelete(string $value = '0'): array
    {
        $schemaInfo = $this->schemaInfo();
        $columns = $schemaInfo->getColumns();

        foreach (AppConst::TABLE_LOGIC_DELETE as $field) {
            if (isset($columns[$field])) {
                return [$field => $value];
            }
        }

        return [];
    }

    /**
     * 重写删除方法 为了兼容逻辑删除
     */
    public function delete($where = null, $allow = false): int
    {
        /** 如果有逻辑删除标识 就添加上条件 */
        $LogicDelete = $this->getLogicDelete('1');

        if (empty($LogicDelete)) {
            $count = intval(parent::destroy($where, $allow));
        } else {
            $count = intval(parent::update($LogicDelete, $where));
        }

        return $count;
    }

    /**
     * 重写model中的自动开启事物
     */
    public function insertAll($data, ?string $column = ''): array
    {
        $isTransaction = DbManager::getInstance()->invoke(function (ClientInterface $client) {
            return DbManager::isInTransaction($client);
        });

        $result = parent::saveAll($data, false, !$isTransaction);
        return $column ? array_column($result, 'id') : [];
    }
}
