<?php
namespace app\controller;

use app\BaseController;
use think\console\Input;
use think\facade\Config;
use app\facade\Test;
use think\facade\Cache;
use think\facade\Log;
use think\facade\Db;
//use app\validate\User;
use think\exception\ValidateException;
use app\model\User;
class Index extends BaseController
{
//    protected $middleware = [
//                                 'check' => ['only' => ['hello']]
//                                 ];
//    protected $batchValidate = true;
    public function index()
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) </h1><p> ThinkPHP V' . \think\facade\App::version() . '<br/><span style="font-size:30px;">14载初心不改 - 你值得信赖的PHP框架</span></p><span style="font-size:25px;">[ V6.0 版本由 <a href="https://www.yisu.com/" target="yisu">亿速云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=64890268" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ee9b1aa918103c4fc"></think>';
    }

    public function hello($name = 'ThinkPHP6')
    {
//        $rule = [
//        'name'  => 'require|max:25',
//        'age'   => 'number|between:1,120',
//    ];
//        $this->validate(['name'=>"hasjkduidqwuiehiohdadhiowqueioqwueo","age"=>1440],$rule);
        $data = [
            'name'  => 'thin',
            'age'   => 10,
            'email' => 'thinkphp@qq.com',
        ];
        try {
            validate(User::class)
                ->scene('edit')
                ->check($data);
        } catch (ValidateException $e) {
            // 验证失败 输出错误信息
            dump($e->getError());
        }
        return 'hello,' . $name;
    }

    public function test()
    {
        event('UserLogin','32312weqw');

        return "87687iu" ;
    }

    public function header()
    {
        echo '<pre>';
       var_dump($this->request->header());

        return "87687iu" ;
    }
    public function download()
    {
        $data = '这是一个测试文件';
        return download('https://soter.youkeshu.com/yks/file/server/excel/4ECBFB3757DA2D836D072F33E3CD02B0_1633142681222.xlsx', 'test.xlsx', true);
    }
    public function testSql()
    {
       $aa=$user = User::find(42);
       dd($aa);
        return 1212;
    }
}
