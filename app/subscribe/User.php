<?php
declare (strict_types = 1);

namespace app\subscribe;
use think\Event;
class User
{
    public function onUserLogin($user)
    {
        print_r('11111111111111111111111111111');
    }

    public function onUserLogout($user)
    {
        print_r('222222222222222222222222222222');
    }

//    public function subscribe(Event $event)
//    {
//        $event->listen('UserLogin', [$this,'onUserLogin']);
//        $event->listen('UserLogout',[$this,'onUserLogout']);
//    }
}
