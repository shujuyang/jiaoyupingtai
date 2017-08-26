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

    // video() 方法，播放视频
    public function video ()
    {
        return view ('home/course/courseVideo');
    }

    // answer() 方法，测试答案
    public function answer ()
    {
        return view ('home/course/courseAnswer');
    }

    // exam() 方法，测试、考试
    public function exam ()
    {
        return view ('home/course/courseExam');
    }

    // document() 方法，文档，知识点的方法
    public function document()
    {
        return view ('home/course/courseDocument');
    }
}