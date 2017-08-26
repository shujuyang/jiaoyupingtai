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

    // forgetPwdOne() 方法
    public function forgetPwdOne()
    {
        return view ('home/user/forgetPasswordOne');
    }

    // forgetPwdTwo() 方法
    public function forgetPwdTwo()
    {
        return view ('home/user/forgetPasswordTwo');
    }

    // forgetPwdThree() 方法
    public function forgetPwdThree()
    {
        return view ('home/user/forgetPasswordThree');
    }
    

    // forgetPwdOK() 方法
    public function forgetPwdOK()
    {
        return view ('home/user/forgetPasswordOK');
    }
}
