<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    // login() 方法， 学生 和 老师 的登录方法
    public function login ()
    {
        return view ('home/user/login');
    }
}
