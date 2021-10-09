<?php
declare (strict_types = 1);

namespace app\event;
class UserLogin
{
    public $data;
    public function __construct(string $data)
    {
        $this->data = $data;
    }
}
