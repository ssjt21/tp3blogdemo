<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>后台登录</title>
    <link href="/mywebblog/App/Admin/Public/css/admin_login.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="admin_login_wrap">
        <h1>后台管理</h1>
        <div class="adming_login_border">
            <div class="admin_input">
                <form action="/mywebblog/index.php/Admin/Login/login" method="post">
                    <ul class="admin_items">
                        <li>
                            <label for="user">用户名：</label>
                            <input type="text" name="username" value="" id="user" size="35" class="admin_input_style" />
                        </li>
                        <li>
                            <label for="pwd">密码：</label>
                            <input type="password" name="password" value="" id="pwd" size="35" class="admin_input_style" />
                        </li>
                        <li>
                            <img name="codeimg" width="255" height="40" onclick="this.src='/mywebblog/index.php/Admin/Login/verify/'+Math.random()" src="/mywebblog/index.php/Admin/Login/verify" />
                        </li>
                        <li>
                            <label for="chkcode">验证码：</label>
                            <input type="text" name="checkcode" value="" id="chkcode" size="35" class="admin_input_style" />
                        </li>
                        <li>
                            <input type="submit" tabindex="3" value="提交" class="btn btn-primary" />
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</body>

</html>