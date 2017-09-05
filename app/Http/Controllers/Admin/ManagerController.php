<?php

namespace App\Http\Controllers\Admin;



use App\Http\Models\Admin\Manager;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManagerController extends Controller
{
    // login() 管理员登录的方法
    public function login ()
    {
        return view('admin/manager/login');
    }

    // showlist() 方法，展示管理员列表
    public function showlist (Request $request) {
        // 到数据库中查询管理员列表
        $managers = Manager::all();
        return json_encode(['result'=>true,'data'=>$managers]);
    }

    // add() 方法，添加管理员的方法
    public function add (Request $request) {
        // 获取数据
        $array = $request->input();
        dd($array);
    }
}
