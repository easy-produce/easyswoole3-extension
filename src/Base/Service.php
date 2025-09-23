<?php

namespace Es3\Base;

use App\Constant\AppConst;
use EasySwoole\Component\Di;
use EasySwoole\Mysqli\QueryBuilder;
use Es3\Constant\ResultConst;
use Es3\Exception\WaringException;

trait Service
{
    protected $dao;

    public function save(array $params)
    {
        return $this->dao->save($params);
    }

    public function delete($where = null, $allow = false): int
    {
        return intval($this->dao->delete($where, $allow));
    }

    public function get(array $where = [], array $field = [])
    {
        return $this->dao->get($where, $field);
    }

    public function update(array $data = [], $where = null, $allow = false): int
    {
        return intval($this->dao->update($data, $where, $allow));
    }

    /**
     * get all
     * @param null $where
     * @param array $page
     * @param array $orderBys
     * @param array $groupBys
     * @return mixed
     */
    public function getAll($where = null, array $page = [], array $orderBys = [], array $groupBys = [], $field = [])
    {
        return $this->dao->getAll($where, $page, $orderBys, $groupBys, $field);
    }

    /**
     * 按照某一列排序 获取最后一条记录
     */
    public function getLast(string $field = 'id'): ?array
    {
        return $this->dao->getLast($field);
    }

    /**
     * 更新全表中某列等于某个值的所有数据
     */
    public function updateField(array $originalFieldValues, array $updateFieldValues, $allow = false): int
    {
        return $this->dao->updateField($originalFieldValues, $updateFieldValues);
    }

    /**
     * 批量插入
     * @param array $data 二维数组
     */
    public function insertAll(array $data, ?string $column = '', ?string $tableName = '', ?bool $ignoreError = false): array
    {
        return $this->dao->insertAll($data, $column, $tableName, $ignoreError);
    }

    /**
     * 根据某列删除
     * @return int
     */
    public function deleteField(array $data): int
    {
        return $this->dao->deleteField($data);
    }

    public function switch(array $ids, string $column, string $switchRule): int
    {
        return $this->dao->switch($ids, $column, $switchRule);
    }

    /**
     * 截断表
     */
    public function truncate(): void
    {
        $this->dao->truncate();
    }

    /**
     * 获取自增编号
     */
    public function getAutoIncrement(): int
    {
        return $this->dao->getAutoIncrement();
    }

    /**
     * 设置自增编号
     * 会自动提交事物
     */
    public function setAutoIncrement(int $autoIncrement): void
    {
        $this->dao->setAutoIncrement($autoIncrement);
    }

    /**
     * 清理where条件
     */
    public function adjustWhere(array $params, $isLogicDelete = true): array
    {
        return $this->dao->adjustWhere($params, $isLogicDelete);
    }

    public function getLogicDelete(): array
    {
        return $this->dao->getLogicDelete();
    }

    /**
     * @return mixed
     */
    public function getDao()
    {
        return $this->dao;
    }

    /**
     * @param mixed $dao
     */
    public function setDao($dao): void
    {
        $this->dao = $dao;
    }
}
