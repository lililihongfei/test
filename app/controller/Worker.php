<?php


namespace app\controller;

use think\facade\Db;
use think\worker\Server;
use Workerman\Lib\Timer;
define('HEARTBEAT_TIME', 20);

class Worker extends Server
{
    protected $socket = 'http://0.0.0.0:2345';
    public function __construct()
    {
        parent::__construct();
        $this->onMessage();
        // 或者这样调用
        $this->worker->onWorkerStart = function ($worker) {
            echo "Worker starting...\n";
        };

    }
    /**
     * 收到信息
     * @param $connection
     * @param $data
     */
    public function onMessage()
    {
        $this->worker->onMessage = function($connection, $data)
        {
            dump($data);
            $connection->send($data);
        };
    }

}