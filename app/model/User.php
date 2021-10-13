<?php
namespace app\model;

use think\Model;

class User extends Model
{
    protected $pk = 'id';
    protected $table = 'batches';

//    public static function onAfterDelete($user)
//    {
//        Profile::destroy($user->id);
//    }
}