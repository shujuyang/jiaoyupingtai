<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    //list() 方法，展示课程列表
    public function courseList()
    {
        return view('home/course/courseList');
    }

    // article() 方法，展示课程详情
    public function article () {
        return view('home/course/article');
    }

    // courseWeek() 方法，根据课程查询所有授课大纲
    public function courseWeek ()
    {
        return view('home/course/courseWeek');
    }

    // score() 方法，登录学生的本课程得分
    public function score()
    {
        return view ('home/course/courseScore');
    }
}
