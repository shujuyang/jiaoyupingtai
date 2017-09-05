<?php

namespace App\Http\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    protected $table = 'manager';   // 设置表名
    protected $primaryKey = 'md_id';    // 设置主键

    // 限制通过 form 表单修改的字段，只允许如下字段被修改
    protected $fillable = ['username','password','mg_role_ids','mg_sex','mg_phone','mg_email','mg_remark'];

}
