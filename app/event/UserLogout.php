<?php


namespace app\event;


class UserLogout
{
    public $data;
    public function __construct(string $data)
    {
        $this->data = $data;
    }
}