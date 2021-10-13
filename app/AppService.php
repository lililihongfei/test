<?php
declare (strict_types = 1);

namespace app;

use think\Service;

/**
 * 应用服务类
 */
class AppService extends Service
{
    public function register()
    {
        // 服务注册
    }

    public function boot()
    {
        $this->app->debug(true);
        \think\facade\Db::event('before_select', function ($query) {
            echo 122312;
            dd($query);
        });
        // 服务启动
    }
}
