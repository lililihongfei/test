<?php


namespace app\controller;


use app\model\Purchaseorders;
use app\BaseController;
class Purchaseorder extends BaseController
{
    public function testSql()
    {
         $user = Purchaseorders::hasWhere('purchaseorderDetail',['sku'=>'AMJJ96502'])->where('Purchaseorders.id',1872924102)->select()->toArray();
dd($user);
         return 1212;
    }

}