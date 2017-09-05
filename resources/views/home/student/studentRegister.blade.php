<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/home/img/asset-favicon.ico">
    <title>在线教育网</title>
    <link rel="stylesheet" href="/home/plugins/normalize-css/normalize.css" />
    <link rel="stylesheet" href="/home/plugins/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="/home/css/page-learing-student-register.css" />
</head>

<body>
    <!-- 页面 -->
    <div class="register">
        <div class="register-head">
            <div class="wrap">
                <a href="javascript:;" class="logo">
                <img src="/home/img/asset-logoico.png" alt="logo" width="200">
            </a>
                <div class="gologin">我有账号 去<a href="{{url('manager')}}">登录</a></div>
            </div>
        </div>
        <div class="register-body">
            <img src="/home/img/page-register_img.jpg" alt="" class="register-ico" width="460">
            <form class="form-horizontal required-validate" id="regStudentForm">
                <ul class="r-position student">
                    <li>
                        <div class="page-header">
                            <h3>欢迎注册在线教育</h3>
                        </div>
                    </li>
                    <li>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">手机号码</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="phone" id="phone" onfocus placeholder="请输入手机号码">
                                <span class="verif-span"></span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">验证码</label>
                            <div class="col-sm-9 verif">
                                <input type="text" class="form-control" name="verif" id="verif" placeholder="请输入验证码">
                                <button class="btn btn-default send" type="button">发送验证码</button>
                                <span class="verif-span"></span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">密码</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="password" id="password" placeholder="请输入密码">
                                <span class="verif-span"></span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">确认密码</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="confirm" id="confirm" placeholder="确认密码">
                                <span class="verif-span"></span>
                            </div>
                        </div>
                    </li>
                    <li class="mag-left">
                        <div class="checkbox">
                            <label>
                        <input type="checkbox" id="agreeRegister">同意协议并注册
                        <a href="javascript:;">《学成网注册协议》</a>
                    </label>
                        </div>
                    </li>
                    <li class="mag-left">
                        <input name="register" type="submit" class="btn btn-primary" value="完成注册"/>
                    </li>
                </ul>
            </form>
            </div>
            <div class="register-footer">
                <!--底部版权-->
                <footer>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <div>
                                    <!--<h1 style="display: inline-block">学成网</h1>--><img src="/home/img/asset-logoIco.png" alt=""></div>
                                <div>学成网致力于普及中国最好的教育它与中国一流大学和机构合作提供在线课程。</div>
                                <div>© 2017年XTCG Inc.保留所有权利。-沪ICP备15025210号</div>
                                <input type="button" class="btn btn-primary" value="下 载" />
                            </div>
                            <div class="col-lg-5 row">
                                <dl class="col-lg-4">
                                    <dt>关于学成网</dt>
                                    <dd>关于</dd>
                                    <dd>管理团队</dd>
                                    <dd>工作机会</dd>
                                    <dd>客户服务</dd>
                                    <dd>帮助</dd>
                                </dl>
                                <dl class="col-lg-4">
                                    <dt>新手指南</dt>
                                    <dd>如何注册</dd>
                                    <dd>如何选课</dd>
                                    <dd>如何拿到毕业证</dd>
                                    <dd>学分是什么</dd>
                                    <dd>考试未通过怎么办</dd>
                                </dl>
                                <dl class="col-lg-4">
                                    <dt>合作伙伴</dt>
                                    <dd>合作机构</dd>
                                    <dd>合作导师</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </footer>

            </div>
        </div>
        <!-- 页面 css js -->
        <script type="text/javascript" src="/home/plugins/jquery/dist/jquery.js"></script>
        <script type="text/javascript" src="/home/plugins/bootstrap/dist/js/bootstrap.js"></script>
        <script src="/home/js/page-learning-student-register.js"></script>
    <script>

        $('#regStudentForm').submit(function() {
            // 获取表单数据
            var phone = $('#phone');
            var phoneReg = /^1(3|5|7|8)\d{9}$/;
            var password = $('#password');
            console.log(password)
            var pwdReg = /^(\w|\,|\.){6,18}$/;
            var confirm = $('#confirm');
            var verif = $('#verif');
            var verifReg = /^\w{4}$/;


            if(phone.val() == ''){
                phone.siblings('.verif-span').show().text('手机号不能为空');
                return false;
            }else if(!phoneReg.test(phone.val())){
                phone.siblings('.verif-span').show().text('请按正确的格式填写手机号');
                return false;
            }else {
                phone.siblings('.verif-span').hide();
            }

            var passwordVal = password.val();
            if(passwordVal == ''){
                password.siblings('.verif-span').show().text('密码不能为空');
                return false;
            }else if(passwordVal.length<6 || passwordVal.length>18 ){
                password.siblings('.verif-span').show().text('密码的长度必须为6-18位');
                return false;
            }else if(!pwdReg.test(passwordVal)){
                password.siblings('.verif-span').show().text('密码只包含数字、字母或"_"、","、"."');
                return false;
            }else {
                password.siblings('.verif-span').hide();
            }

            if(confirm.val() == ''){
                confirm.siblings('.verif-span').show().text('确认密码不能为空');
                return false;
            }else if (confirm.val() != password.val()){
                confirm.siblings('.verif-span').show().text('两次输入的密码不相同');
                return false;
            }else {
                confirm.siblings('.verif-span').hide();
            }
            if(verif.val() == ''){
                verif.siblings('.verif-span').show().text('手机验证码不能为空');
                return false;
            }
        })




    </script>
</body>