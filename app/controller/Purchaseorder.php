<?php


namespace app\controller;


use app\model\Purchaseorders;
use app\BaseController;
class Purchaseorder extends BaseController
{
    public function testSql()
    {
         $user = Purchaseorders::with('purchaseorderDetail')->select()->toArray();
dd($user);
         return 1212;
    }

}