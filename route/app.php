<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\facade\Route;

Route::get('think', function () {
    return 'hello,ThinkPHP6!';
});
// 支持批量添加
Route::pattern([
    'name' => '[\w|\W]+',
    'id'   => '\d+',
]);
Route::resource('blog', 'Blog');
Route::get('hello/:name', 'index/hello');
Route::get('blog/:id','Blog/read');
//Route::miss(function() {
//    return '404 Not Found!';
//});