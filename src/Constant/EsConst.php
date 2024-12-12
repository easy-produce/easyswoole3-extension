<?php

namespace Es3\Constant;

class EsConst
{
    /** 目录结构定制 */
    const ES_DIRECTORY_MODULE_NAME = 'Module';
    const ES_DIRECTORY_CONTROLLER_NAME = 'Controller';
    const ES_DIRECTORY_RPC_NAME = 'Rpc';
    const ES_DIRECTORY_APP_NAME = 'App';
    const ES_DIRECTORY_CONF_NAME = 'Conf';
    const ES_DIRECTORY_CRONTAB_NAME = 'Crontab';
    const ES_DIRECTORY_PROCESS_NAME = 'Process';
    const ES_DIRECTORY_QUEUE_NAME = 'Queue';
    const ES_DIRECTORY_EVENT_NAME = 'Event';
    const ES_FILE_NAME_ROUTER = 'router.php';
    const ES_FILE_NAME_EVENT = 'Event.php';

    /** 字段key定义 */
    const ES_KEY_COLUMN = 'column';
    const ES_KEY_VALUE = 'value';

    /** 框架中存储 */
    const ES_LOG_MYSQL_QUERY = 'ES_LOG_MYSQL_QUERY';
    const ES_TRACE_ID = 'ES_TRACE_ID';
    const ES_RABBIT = 'rabbit';
    const ES_REDIS = 'redis';
    const ES_SERVER_TEMP_NAME = 'ES_SERVER_TEMP_NAME';
    const ES_SERVER_IP = 'ES_SERVER_IP';
    const ES_SERVER_TYPE = 'ES_SERVER_TYPE';
    const ES_SERVER_RUN_TIME = 'ES_SERVER_RUN_TIME';
    const ES_AUTULOAD_PROCESS = 'ES_AUTULOAD_PROCESS';
    const ES_AUTULOAD_CRONTAB = 'ES_AUTULOAD_CRONTAB';
    const ES_RUN_ENV = 'RUN_ENV';
    const ES_EVENT_CRONTAB_EXCEPTION = 'ops.crontab.exception';
    const ES_EVENT_PROCESS_EXCEPTION = 'ops.process.exception';
    const ES_EVENT_PROCESS_SHUTDOWN = 'ops.process.shutdown';
    const ES_RUNNING_RECORD = 'es_running_record';
}
