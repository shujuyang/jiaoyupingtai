<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeacherController extends Controller
{
    // register() 教师注册的方法
    public function register ()
    {
        return view('home/teacher/teacherRegister');
    }

    // info() 教师详情页
    public function info ()
    {
        return view('home/teacher/teacherInfo');
    }
}
