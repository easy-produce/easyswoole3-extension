<?php
namespace App\Controller\Basic;

use App\Controller\Common;
use EasySwoole\ORM\DbManager;
use Es3\Exception\InfoException;
use Es3\Output\Json;

class BaseBasic extends Common
{

    /**
     * 新增
     */
    public function save()
    {
        try {
            /** 获取所有参数 */
            $params = $this->getParams();

            /** 校验参数 */
            if (superEmpty($params) || !is_array($params)) {
                throw new InfoException(1022, '参数有误');
            }
            foreach ($params as $key => $param) {
                if (superEmpty($param['id'])) {
                    throw new InfoException(1022, '参数有误');
                }
            }

            /** 开启事务 */
            DbManager::getInstance()->startTransaction();

            /** 插入数据 */
           $this->getService()->insertModels($params);

            /** 提交事务 */
            DbManager::getInstance()->commit();

            Json::success();
        } catch (\Throwable $throwable) {
            /** 回滚事物 */
            DbManager::getInstance()->rollback();
            Json::fail($throwable, $throwable->getCode(), $throwable->getMessage());
        }
    }

    /**
     * 修改
     */
    public function update()
    {
        try {
            /** 获取所有参数 */
            $params = $this->getParams();

            /** 校验参数 */
            if (superEmpty($params) || !is_array($params)) {
                throw new InfoException(1022, '参数有误');
            }
            foreach ($params as $key => $param) {
                if (superEmpty($param['id'])) {
                    throw new InfoException(1022, '参数有误');
                }
            }

            /** 开启事务 */
            DbManager::getInstance()->startTransaction();

            /** 修改数据 */
            $this->getService()->updateModels($params);

            /** 提交事务 */
            DbManager::getInstance()->commit();

            Json::success();
        } catch (\Throwable $throwable) {
            /** 回滚事物 */
            DbManager::getInstance()->rollback();
            Json::fail($throwable, $throwable->getCode(), $throwable->getMessage());
        }
    }

    /**
     * 删除
     */
    public function delete()
    {
        try {
            /** 获取所有参数 */
            $params = $this->getParams();

            /** 校验参数 */
            if (superEmpty($params) || !is_array($params)) {
                throw new InfoException(1022, '参数有误');
            }
//            foreach ($params as $id) {
//                if (!is_int($id)) {
//                    throw new InfoException(1022, '参数有误');
//                }
//            }

            /** 开启事务 */
            DbManager::getInstance()->startTransaction();

            /** 插入数据 */
            $this->getService()->deleteModels($params);

            /** 提交事务 */
            DbManager::getInstance()->commit();

            Json::success();
        } catch (\Throwable $throwable) {
            /** 回滚事物 */
            DbManager::getInstance()->rollback();
            Json::fail($throwable, $throwable->getCode(), $throwable->getMessage());
        }
    }
}