<?php

namespace App\Module\Basic\Dao;

use EasySwoole\EasySwoole\Logger;
use EasySwoole\ORM\DbManager;
use Es3\Base\Dao;
use Es3\Exception\InfoException;

class BaseBasicDao
{
    use Dao;

    /**
     * 新增
     * @param array $params
     * @throws InfoException
     */
    public function insertModels(array $params)
    {
        /** 获取参数中的ID */
        $ids = array_column($params, 'id');

        /** 获取已经存在的ID */
        $existIds = array_column($this->getAll(['id' => [$ids, 'IN']])['list'], 'id');

        /** 循环插入数据 */
        foreach ($params as $key => $param) {
            /** 过滤掉已经存在的数据 */
            if (!in_array($param['id'], $existIds)) {
                $newId = $this->save($param);
                if (superEmpty($newId)) {
                    throw new InfoException(1027, "插入数据[" . json_encode($param) . "]失败");
                }

                /** 记录Log */
                $lastQuery = DbManager::getInstance()->getLastQuery()->getLastQuery();
                $schemaInfo = $this->model->schemaInfo();
                Logger::getInstance()->log($lastQuery, Logger::LOG_LEVEL_INFO, 'basic_sdk_' . $schemaInfo->getTable());
            }
        }
    }

    /**
     * 修改
     * @param array $params
     * @throws InfoException
     * @throws \Es3\Exception\ErrorException
     */
    public function updateModels(array $params)
    {
        /** 获取参数中的ID */
        $ids = array_column($params, 'id');

        /** 获取已经存在的ID */
        $existIds = array_column($this->getAll(['id' => [$ids, 'IN']])['list'], 'id');

        foreach ($params as $key => $param) {
            /** 校验ID是否已经存在 */
            if (!in_array($param['id'], $existIds)) {
                throw new InfoException(1028, "ID[" . $param['id'] . "]不存在，无法进行修改");
            }

            /** 去掉主键 */
            $id = $param['id'];
            unset($param['id']);
            $updateId = $this->update($param, [$id]);

            if (superEmpty($updateId)) {
                throw new InfoException(1027, "修改数据[" . json_encode($param) . "]失败");
            }

            /** 记录Log */
            $lastQuery = DbManager::getInstance()->getLastQuery()->getLastQuery();
            $schemaInfo = $this->model->schemaInfo();
            Logger::getInstance()->log($lastQuery, Logger::LOG_LEVEL_INFO, 'basic_sdk_' . $schemaInfo->getTable());
        }
    }
    /**
     * 删除
     * @param array $ids
     * @throws InfoException
     * @throws \Es3\Exception\ErrorException
     */
    public function deleteModels(array $ids)
    {
        /** 获取已经存在的ID */
        $existIds = array_column($this->getAll(['id' => [$ids, 'IN']])['list'], 'id');

        foreach ($ids as $id) {
//            /** 校验ID是否已经存在 */
//            if (!in_array($id, $existIds)) {
//                throw new InfoException(1028, "ID[" . $id . "]不存在，无法进行删除");
//            }

            /** 删除 */
            $rows = $this->delete([$id]);

//            if (superEmpty($rows)) {
//                throw new InfoException(1027, "删除数据[" . $id . "]失败");
//            }

            /** 记录Log */
            $lastQuery = DbManager::getInstance()->getLastQuery()->getLastQuery();
            $schemaInfo = $this->model->schemaInfo();
            Logger::getInstance()->log($lastQuery, Logger::LOG_LEVEL_INFO, 'basic_sdk_' . $schemaInfo->getTable());
        }
    }

}
