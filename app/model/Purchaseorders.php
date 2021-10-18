<?php


namespace app\model;
use think\Model;

class Purchaseorders extends Model
{
    protected $pk = 'id';
    protected $table = 'purchaseorders';

    public function purchaseorderDetail()
    {
        return $this->hasMany(PurchaseorderDetails::class, 'purchaseorder_id');
    }
}