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
Route::get('Home','Home\IndexController@index');
Route::get('Home/Index','Home\IndexController@index');
/*
 * 前台页面的路由群组
 * 指定 路由前缀 和 命名空间
 * */
Route::group(['prefix' => 'Home','namespace' => 'Home'],function(){
    Route::get('Index/index','IndexController@index');
});

