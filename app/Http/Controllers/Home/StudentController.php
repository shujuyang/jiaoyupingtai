<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    // register() 方法，学生注册的方法
    public function register ()
    {
        return view ('home/student/studentRegister');
    }

    // master() 方法，显示学生个人主页的方法
    public function master ()
    {
        return view('home/student/studentMaster');
    }

    // allCourse() 方法，学生购买的所有课程
    public function allCourse ()
    {
        return view ('home/student/studentAllCourse');
    }

    // setting() 方法，设置学生信息
    public function setting ()
    {
        return view ('home/student/setting');
    }

    // logout() 方法，登录学生退出的方法
    public function logout ()
    {
        return view ('home/student/logout');
    }
}
