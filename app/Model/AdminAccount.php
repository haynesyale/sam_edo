<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class AdminAccount extends User
{
    //安全退出设置
    protected $rememberTokenName = '';
}
