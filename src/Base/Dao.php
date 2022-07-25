<?php

namespace Es3\Base;

use App\Constant\ResultConst;
use EasySwoole\Component\Di;
use EasySwoole\ORM\Db\ClientInterface;
use EasySwoole\ORM\DbManager;
use Es3\Exception\ErrorException;
use EasySwoole\Mysqli\QueryBuilder;
use Es3\Exception\WaringException;
use function PHPUnit\Framework\any;

trait Dao
{
    public $model;

    public function save(array $params)
    {
        /** 调整参数 */
        $params = $this->adjustWhere($params);
        $params = $this->model->autoCreateUser($params);

        return $this->model::create($params)->save();
    }

    public function deleteField(array $data): int
    {
        if (superEmpty($data)) {
            throw new ErrorException(1010, "deleteField()删除参数不能为空");
        }
        $this->model = $this->model::create();
        $res = $this->model->delete($data, true);
        return intval($res);
    }

    public function updateField(array $originalFieldValues, array $updateFieldValues, $allow = false): int
    {
        $originalFieldValues = $this->adjustWhere($originalFieldValues);

        $schemaInfo = $this->model->schemaInfo();
        $primaryKey = $schemaInfo->getPkFiledName();

        // 不允许更新主键
        unset($updateFieldValues[$primaryKey]);

        if (superEmpty($originalFieldValues) || superEmpty($updateFieldValues)) {
            throw new ErrorException(1011, "updateField()更新参数不能为空");
        }

        $this->model = $this->model::create();
        $updateFieldValues = $this->model->autoUpdateUser($updateFieldValues);

        $updateFieldValues = $this->model->autoUpdateUser($updateFieldValues);
        $this->model->update($updateFieldValues, $originalFieldValues, $allow);

        if (!$this->model->lastQueryResult()) {
            throw new WaringException(1006, '更新出现异常 请检查参数');
        }

        $lastErrorNo = $this->model->lastQueryResult()->getLastErrorNo();
        if ($lastErrorNo !== 0) {
            throw new ErrorException(1005, $model->lastQueryResult()->getLastError());
        }

        return intval($this->model->lastQueryResult()->getAffectedRows());
    }

    public function get(array $where = [], array $field = [])
    {
        $LogicDelete = $this->model->getLogicDelete();
        $where = array_merge($where, $LogicDelete);

        return $this->model::create()->field($field)->get($where);
    }

    public function delete($where = null, $allow = false): int
    {
        $this->model = $this->model::create();
        $this->model->delete($where, $allow);

        $lastErrorNo = $this->model->lastQueryResult()->getLastErrorNo();
        if ($lastErrorNo !== 0) {
            throw new ErrorException(1004, $model->lastQueryResult()->getLastError());
        }

        return intval($this->model->lastQueryResult()->getAffectedRows());
    }

    public function update(array $data = [], array $primary, $allow = false): int
    {
        $schemaInfo = $this->model->schemaInfo();
        $primaryKey = $schemaInfo->getPkFiledName();

        // 不允许更新主键
        unset($data[$primaryKey]);

        /** 调整参数 */
        $data = $this->adjustWhere($data);
        $data = $this->model->autoUpdateUser($data);

        $this->model = $this->model::create();
        $this->model->update($data, $primary, $allow);

        $lastErrorNo = $this->model->lastQueryResult()->getLastErrorNo();
        if ($lastErrorNo !== 0) {
            throw new ErrorException(1005, $model->lastQueryResult()->getLastError());
        }

        return intval($this->model->lastQueryResult()->getAffectedRows());
    }

    public function getLast(string $field = 'id'): ?array
    {
        $row = $this->model::create()->order($field, 'DESC')->get();
        return $row->toArray() ?? [];
    }

    public function getAutoIncrement(): ?int
    {
        $schemaInfo = $this->model->schemaInfo();
        $res = $this->model::create()->query((new QueryBuilder())->raw("select auto_increment from information_schema.tables where table_name = '" . $schemaInfo->getTable() . "'"));

        return $res[0]['auto_increment'] ?? null;
    }

    public function setAutoIncrement(int $autoIncrement): void
    {
        $schemaInfo = $this->model->schemaInfo();
        $this->model::create()->query((new QueryBuilder())->raw('alter table ' . $schemaInfo->getTable() . ' auto_increment = ' . $autoIncrement));
    }

    public function getAll($where = null, array $page = [], array $orderBys = [], array $groupBys = [], array $fields = [])
    {
        $model = $this->model::create();
        $tableName = $model->getTableName();
        $LogicDelete = $this->model->getLogicDelete();
        $where = array_merge((array)$where, $LogicDelete);
        $where = $this->adjustWhere($where);

        if ($page) {
            $model->limit($page[0], $page[1]);
        }

        /** 没有传递排序 默认一个 */
        if (superEmpty($orderBys)) {
            $pk = $model->schemaInfo()->getPkFiledName();
            $orderBys = [$pk => 'DESC'];
        }

        if ($orderBys) {
            foreach ($orderBys as $key => $orderBy) {
                /** 如果该字段在表中不存在 就报错 */
                $isExist = \Es3\Utility\Model::columnIsExist($model, $key);
                if (!$isExist) {
                    throw new WaringException(1063, "无法按{$key}进行排序 数据表{$tableName}不存在{$key}字段");
                }
                $model->order($key, $orderBy);
            }
        }

        if ($groupBys) {
            foreach ($groupBys as $key => $groupBy) {
                $model->group($groupBy);
            }
        }

        /** 对于$field单独处理 */
        foreach ($fields as $key => $field) {
            if (strpos($field, '`') === false) {
                $fields[$key] = "`{$field}`";
            }
        }

        $list = $model->field($fields)->withTotalCount()->all($where);
        $total = $model->lastQueryResult()->getTotalCount();

        return [ResultConst::RESULT_LIST_KEY => $list, ResultConst::RESULT_TOTAL_KEY => $total];
    }

    public function switch(array $ids, string $column, string $switchRule): int
    {
        $model = $this->model::create();
        $tableName = $model->getTableName();

        /** 如果该字段在表中不存在 就报错 */
        $isExist = \Es3\Utility\Model::columnIsExist($model, $column);
        if (!$isExist) {
            throw new WaringException(1063, "无法按{$column}进行切换状态 数据表{$tableName}不存在{$column}字段");
        }

        return $this->update([$column => $switchRule], $ids);
    }

    public function truncate(): void
    {
        $schemaInfo = $this->model->schemaInfo();
        $this->model = $this->model::create();
        $this->model->query((new QueryBuilder())->raw('TRUNCATE TABLE ' . $schemaInfo->getTable()));
    }

    public function insertAll(array $data, ?string $column = ''): array
    {
        /** 当前是否开启事物 */
        $this->model = $this->model::create();

        foreach ($data as $key => $val) {
            $val = $this->model->autoCreateUser($val);
            $data[$key] = $val;
        }

        $result = $this->model->insertAll($data, $column);

        return $result;
    }

    /**
     * 清理where条件
     */
    public function adjustWhere(array $params = [], $isLogicDelete = true): array
    {
        return $this->model->adjustWhere($params, $isLogicDelete);
    }

    public function getLogicDelete(): array
    {
        return $this->model->getLogicDelete();
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model): void
    {
        $this->model = $model;
    }

    public function query(string $sql, ?array $param = [], bool $isOne = false, array $queryOption = [], bool $raw = false, string $connection = 'default'): ?array
    {
        try {
            /** 计算总行数查询条件 */
            if (strstr($sql, 'SQL_CALC_FOUND_ROWS')) {
                $queryOption[] = 'SQL_CALC_FOUND_ROWS';
            }

            $queryBuild = new QueryBuilder();
            $queryBuild->setQueryOption($queryOption);
            $queryBuild->raw($sql, $param);

            $results = DbManager::getInstance()->query($queryBuild, $raw, $connection);

            if ($isOne) {
                $total = 1;
                $list = $results->getResultOne();
            } else {
                $list = $results->getResult();
                $total = $results->getTotalCount();
            }

            if (strstr($sql, 'SQL_CALC_FOUND_ROWS')) {
                return [ResultConst::RESULT_LIST_KEY => $list, ResultConst::RESULT_TOTAL_KEY => $total];
            }

            return $list;
        } catch (\Throwable $throwable) {

            $trace = $throwable->getTrace()[2] ?? null;
            Di::getInstance()->set(\Es3\Constant\ResultConst::FILE_KEY, $trace['file'] ?? null . $trace['function'] ?? null);
            Di::getInstance()->set(\Es3\Constant\ResultConst::LINE_KEY, $trace['line'] ?? null);
            throw new ErrorException($throwable->getCode(), $throwable->getMessage());
        }
    }

    public function exec(string $sql, ?array $param = [], bool $raw = true, string $connection = 'default'): array
    {
        $queryBuild = new QueryBuilder();
        // 支持参数绑定 第二个参数非必传
        $queryBuild->raw($sql, $param);

        // 第二个参数 raw  指定true，表示执行原生sql
        // 第三个参数 connectionName 指定使用的连接名，默认 default
        $results = DbManager::getInstance()->query($queryBuild, $raw, $connection);

        $lastErrorNo = $results->getLastErrorNo();
        $lastError = $results->getLastError();

        if ($lastErrorNo !== 0) {
            throw new ErrorException(1011, $lastError);
        }

        return [ResultConst::RESULT_AFFECTED_ROWS_KEY => $results->getAffectedRows(), ResultConst::RESULT_LAST_INSERT_ID_KEY => $results->getLastInsertId()];
    }
}
