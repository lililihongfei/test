<?php

namespace app\listener;
use think\facade\Log;
class UserLogin
{

    /**
     * 事件监听处理
     *
     * @return mixed
     */
    public function handle($event)
    {
        print_r($event);
    }
}
