<?php


namespace app\controller;
use think\facade\Route;

class Blog
{
    public function index()
    {
        echo Route::buildUrl('/blog/5');
    }

    public function read($id)
    {
        echo Route::buildUrl('/blog/5');
    }

    public function edit($id)
    {
        echo 'edit'.$id;
    }

    public function test($id)
    {
        echo 'test'.$id;
    }
}