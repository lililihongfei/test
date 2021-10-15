<?php


namespace app\model;
use think\Model;
class PurchaseorderDetails extends Model
{
    protected $pk = 'id';
    protected $table = 'purchaseorder_details';
    public function purchaseorder()
    {
        return $this->belongsTo(Purchaseorders::class);
    }
}