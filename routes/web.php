<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/','Home\IndexController@index');
Route::get('home/index','Home\IndexController@index');
// 只写一个 Home 显示 Forbidden
// Route::get('Home','Home\IndexController@index');
/*
 * 前台页面的路由群组
 * 指定 路由前缀 和 命名空间
 * */
Route::group(['prefix' => 'home','namespace' => 'Home'],function(){

    Route::get('index/index','IndexController@index');
    Route::get('user/login','UserController@login');
    Route::get('problem/feedback','ProblemController@feedback');

    // 课程控制器
    Route::get('course/list','CourseController@courseList');
    Route::get('course/article','CourseController@article');
    Route::get('course/week','CourseController@courseWeek');
    Route::get('course/score','CourseController@score');


    // 教师控制器
    Route::get('teacher/register','TeacherController@register');
    Route::get('teacher/info','TeacherController@info');

    // 学生控制器
    Route::get('student/register','StudentController@register');
    Route::get('student/master','StudentController@master');
    Route::get('student/allCourse','StudentController@allCourse');
    Route::get('student/setting','StudentController@setting');


});

