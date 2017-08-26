<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProperController extends Controller
{
    // feedback() 方法，问题反馈的方法
    public function feedback ()
    {
        return view('home/problem/feedback');
    }

}
