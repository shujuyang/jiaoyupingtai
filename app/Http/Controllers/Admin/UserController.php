<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    // login() 管理员登录的方法
    public function login ()
    {
        return view('admin/manager/login');
    }

    // showlist() 方法，展示管理员列表
    public function showlist () {

    }
}
