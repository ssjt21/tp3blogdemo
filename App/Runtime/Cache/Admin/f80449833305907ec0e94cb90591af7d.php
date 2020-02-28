<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="/mywebblog/App/Admin/Public/css/common.css" />
    <link rel="stylesheet" type="text/css" href="/mywebblog/App/Admin/Public/css/main.css" />
    <script type="text/javascript" src="/mywebblog/App/Admin/Public/js/libs/modernizr.min.js"></script>
</head>

<body>
    <div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="/mywebblog/index.php/Admin/Index/index">首页</a></li>
                <li><a href="/mywebblog/index.php/Home/Index/" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="">管理员:<?php echo (session('username')); ?></a></li>
                <li><a href="/mywebblog/index.php/Admin/Admin/edit/id/<?php echo (session('id')); ?>">修改密码</a></li>
                <li><a href="/mywebblog/index.php/Admin/Login/logout">退出</a></li>
            </ul>
        </div>
    </div>
</div>
    <div class="container clearfix">
        <div class="sidebar-wrap">
    <div class="sidebar-title">
        <h1>菜单</h1>
    </div>
    <div class="sidebar-content">
        <ul class="sidebar-list">
            <li>
                <a href="#"><i class="icon-font"></i>常用操作</a>
                <ul class="sub-menu">
                    <li><a href="/mywebblog/index.php/Admin/Article/index"><i class="icon-font"></i>作品管理</a></li>
                    <!--<li><a href="design.html"><i class="icon-font">&#xe005;</i>博文管理</a></li>-->
                    <li><a href="/mywebblog/index.php/Admin/Cate/index"><i class="icon-font"></i>栏目管理</a></li>
                    <!--<li><a href="design.html"><i class="icon-font">&#xe004;</i>留言管理</a></li>
                            <li><a href="design.html"><i class="icon-font">&#xe012;</i>评论管理</a></li>-->
                    <li><a href="/mywebblog/index.php/Admin/FLink/index"><i class="icon-font"></i>友情链接</a></li>
                    <li><a href="/mywebblog/index.php/Admin/Admin/index"><i class="icon-font"></i>用户管理</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="icon-font"></i>系统管理</a>
                <ul class="sub-menu">
                    <li><a href="#"><i class="icon-font"></i>系统设置</a></li>
                    <li><a href="#"><i class="icon-font"></i>清理缓存</a></li>
                    <li><a href="#"><i class="icon-font"></i>数据备份</a></li>
                    <li><a href="#"><i class="icon-font"></i>数据还原</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
        <!--/sidebar-->
        <div class="main-wrap">

            <div class="crumb-wrap">
                <div class="crumb-list"><i class="icon-font"></i><a href="/mywebblog/index.php/Admin/Index">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/mywebblog/index.php/Admin/Cate/index">栏目管理</a><span class="crumb-step">&gt;</span><span>新增栏目</span></div>
            </div>
            <div class="result-wrap">
                <div class="result-content">
                    <form action="/mywebblog/index.php/Admin/Cate/insert" method="post" id="myform" name="myform">
                        <table class="insert-tab" width="100%">
                            <tbody>

                                <tr>
                                    <th><i class="require-red">*</i>栏目名称：</th>
                                    <td>
                                        <input class="common-text required" id="title" name="catename" size="50" value="" type="text" placeholder="请输入栏目名称">
                                    </td>
                                </tr>

                                <tr>
                                    <th></th>
                                    <td>
                                        <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                        <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>

        </div>
        <!--/main-->
    </div>
</body>

</html>