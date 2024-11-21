<?php

use FastRoute\RouteCollector;

/**
 * @author z
 * @description 【运维路由】
 */
return [
    '/api' => [
        '/ops' => function (RouteCollector $route) {

            /** 进程相关路由 */
            // 新增进程
            // $route->addRoute(['POST'], '/process', '/Api/Ops/Process/save');
            // 删除进程
            // $route->addRoute(['DELETE'], '/process/{id:\d+}', '/Api/Ops/Process/delete');
            // 编辑进程
            // $route->addRoute(['PUT'], '/process/{id:\d+}', '/Api/Ops/Process/update');
            // 进程详情
            // $route->addRoute(['GET'], '/process/{id:\d+}', '/Api/Ops/Process/get');
            // 进程列表
            // $route->addRoute(['GET'], '/process', '/Api/Ops/Process/index');
            // 进程按属性分组
            // $route->addRoute(['GET'], '/process/group/{column}', '/Api/Ops/Process/group');
            // 进程批量修改
            // $route->addRoute(['PUT'], '/process/batch', '/Api/Ops/Process/batchUpdate');
            // 进程批量删除
            // $route->addRoute(['DELETE'], '/process/batch', '/Api/Ops/Process/batchDelete');
            // 进程对某个字段切换状态
            // $route->addRoute(['PUT'], '/process/switch/{column}', '/Api/Ops/Process/switch');
            // 进程选项列表
            // $route->addRoute(['GET'], '/process/option/{column}', '/Api/Ops/Process/option');


            /** 构建相关路由 */
            // 新增构建
            // $route->addRoute(['POST'], '/build', '/Api/Ops/Build/save');
            // 删除构建
            // $route->addRoute(['DELETE'], '/build/{id:\d+}', '/Api/Ops/Build/delete');
            // 编辑构建
            // $route->addRoute(['PUT'], '/build/{id:\d+}', '/Api/Ops/Build/update');
            // 构建详情
            // $route->addRoute(['GET'], '/build/{id:\d+}', '/Api/Ops/Build/get');
            // 构建列表
            // $route->addRoute(['GET'], '/build', '/Api/Ops/Build/index');
            // 构建按属性分组
            // $route->addRoute(['GET'], '/build/group/{column}', '/Api/Ops/Build/group');
            // 构建批量修改
            // $route->addRoute(['PUT'], '/build/batch', '/Api/Ops/Build/batchUpdate');
            // 构建批量删除
            // $route->addRoute(['DELETE'], '/build/batch', '/Api/Ops/Build/batchDelete');
            // 构建对某个字段切换状态
            // $route->addRoute(['PUT'], '/build/switch/{column}', '/Api/Ops/Build/switch');
            // 构建选项列表
            // $route->addRoute(['GET'], '/build/option/{column}', '/Api/Ops/Build/option');

            /** 定时任务相关路由 */
            // 新增定时任务
            // $route->addRoute(['POST'], '/crontab', '/Api/Ops/Crontab/save');
            // 删除定时任务
            // $route->addRoute(['DELETE'], '/crontab/{id:\d+}', '/Api/Ops/Crontab/delete');
            // 编辑定时任务
            // $route->addRoute(['PUT'], '/crontab/{id:\d+}', '/Api/Ops/Crontab/update');
            // 定时任务详情
            // $route->addRoute(['GET'], '/crontab/{id:\d+}', '/Api/Ops/Crontab/get');
            // 定时任务列表
            // $route->addRoute(['GET'], '/crontab', '/Api/Ops/Crontab/index');
            // 定时任务按属性分组
            // $route->addRoute(['GET'], '/crontab/group/{column}', '/Api/Ops/Crontab/group');
            // 定时任务批量修改
            // $route->addRoute(['PUT'], '/crontab/batch', '/Api/Ops/Crontab/batchUpdate');
            // 定时任务批量删除
            // $route->addRoute(['DELETE'], '/crontab/batch', '/Api/Ops/Crontab/batchDelete');
            // 定时任务对某个字段切换状态
            // $route->addRoute(['PUT'], '/crontab/switch/{column}', '/Api/Ops/Crontab/switch');
            // 定时任务选项列表
            // $route->addRoute(['GET'], '/crontab/option/{column}', '/Api/Ops/Crontab/option');
        },
    ]
];