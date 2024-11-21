<?php

namespace App\Module\Callback;

class CallbackConstant
{
    const REDIS_CALL_CHANNEL = 'REDIS_CALL_CHANNEL';
    const REDIS_CALL_LIST = 'REDIS_CALL_LIST';

    const SAVE_LOG_COUNT = 3;

    /** 限流配置（微秒） */
    const LIMIT_LEVEL_LOW = 1000000;  // 每个任务间隔1秒执行 ;
    const LIMIT_LEVEL_CENTER = 500000; // 每个任务间隔0.5秒执行
    const LIMIT_LEVEL_HIGH = -1;  // 不限制 并且并发执行
    const LIMIT_LEVEL_FAIL = 10000000;  // 每个任务间隔10秒执行 ;

    /** 任务保留天数 */
    const TASK_SAVE_DAY = '7';

    /** 最大尝试次数 */
    const MAX_RETRY_COUNT = 30; // 常规队列 高低中 最多执行调用次数  意味着请求进来这30次保证调用速度
    
    /** 失败超过30次的请求执行速度  （微秒）*/
    const LIMIT_FAIL_ALL = 10000000;  // 每个任务间隔10秒执行 ;
}
