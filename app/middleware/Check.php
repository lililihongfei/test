<?php
declare (strict_types = 1);

namespace app\middleware;

class Check
{
    /**
     * 处理请求
     *
     * @param \think\Request $request
     * @param \Closure       $next
     * @return void
     */
    public function handle($request, \Closure $next)
    {
        echo 124341231231212312;
        if ($request->param('name') == 'lili') {
            return redirect((string) url('index/hello',['name' => 'think']));
        }

        return $next($request);
    }
}
