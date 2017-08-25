<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    // 展示前台网站首页面的方法
    public function index()
    {
        return view('home/index/index');
    }

    // 展示前台 列表页的方法
    public function learingList()
    {
        return view('home/index/learingList');
    }
}
