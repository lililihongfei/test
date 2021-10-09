<?php
// 事件定义文件
return [
    'bind'      => [
        'UserLogin' => 'app\event\UserLogin',
        'UserLogout' => 'app\event\UserLogout',
    ],

    'listen'    => [
//        'UserLogin' => ['app\listener\UserLogin'],
        'AppInit'  => [],
        'HttpRun'  => [],
        'HttpEnd'  => [],
        'LogLevel' => [],
        'LogWrite' => [],
    ],

    'subscribe' => [
        'app\subscribe\User',
    ],
];
