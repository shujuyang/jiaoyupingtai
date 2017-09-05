<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManagerTable extends Migration
{
    /**
     * Run the migrations.
     * 运行迁移
     * @return void
     */
    public function up()
    {
        /*
   CREATE TABLE `qz_manager` (
  `mg_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `username` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '名称',
  `password` char(60) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '密码',
  `mg_role_ids` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '角色ids',
  `mg_sex` enum('男','女') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '男' COMMENT '性别',
  `mg_phone` char(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '手机号码',
  `mg_email` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '邮箱',
  `mg_remark` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '备注',
  `created_at` timestamp NULL DEFAULT NULL COMMENT '添加时间',
  `updated_at` timestamp NULL DEFAULT NULL COMMENT '修改时间',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT '删除时间',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '记住我标记',
  PRIMARY KEY (`mg_id`),
  UNIQUE KEY `manager_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
         * */
        Schema::create('manager',function(Blueprint $table){
           $table->increments('mg_id')->comment('主键id');
           $table->string('username',64)->comment('名称');
           $table->char('password',60)->comment('密码');
           $table->string('mg_role_ids','200')->default("")->comment('角色ids');
           $table->enum('mg_sex',['男','女'])->defalut('男')->comment('性别');
           $table->char('mg_phone',11)->default("")->comment('手机号码');
           $table->string('mg_email',64)->default("")->comment('邮箱');
           $table->text('mg_remark')->comment('备注');
           $table->timestamps();    // 添加created_at 和 updated_at 列
           $table->softDeletes();   // 添加一个 deleted_at
           $table->string('remember_token',100)->nullable()->comment('记住我标识');
           $table->unique('username','manager_username_unique');
           $table->engine = 'InnoDB';
           $table->charset = 'utf8mb4';
        });
    }

    /**
     * Reverse the migrations.
     * 撤销迁移
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manager');
    }
}
