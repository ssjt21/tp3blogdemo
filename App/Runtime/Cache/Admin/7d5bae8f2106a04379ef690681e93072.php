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
    <!--/mywebblog/index.php/Admin/Admin /mywebblog/index.php/Admin /mywebblog/index.php /mywebblog /mywebblog/Public-->

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
                <div class="crumb-list"><i class="icon-font"></i><a href="/mywebblog/index.php/Admin/Index">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">用户管理</span></div>
            </div>
            <div class="search-wrap">
                <div class="search-content">
                    <form action="/mywebblog/index.php/Admin/Admin/index" method="post">
                        <table class="search-tab">
                            <tr>
                                <th width="120">选择分类:</th>
                                <td>
                                    <select name="search-sort" id="">
                                    <option value="">全部</option>
                                    <option value="19">精品界面</option><option value="20">推荐界面</option>
                                </select>
                                </td>
                                <th width="70">关键字:</th>
                                <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>
                                <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
            <div class="result-wrap">
                <form action="/mywebblog/index.php/Admin/Admin/sort" name="myform" id="myform" method="post">
                    <div class="result-title">
                        <div class="result-list">
                            <a href="/mywebblog/index.php/Admin/Admin/add"><i class="icon-font"></i>新增用户</a>
                            <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                            <!--<a id="updateOrd" href="/mywebblog/index.php/Admin/Admin/sort"><i class="icon-font"></i>更新排序</a>-->
                            <input class="btn btn-primary btn2" type="submit" value="更新排序" />
                        </div>
                    </div>
                    <div class="result-content">
                        <table class="result-tab" width="100%">
                            <tr>
                                <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                                <th>排序</th>
                                <th>ID</th>
                                <th>用户名称</th>
                                <th>操作</th>
                            </tr>
                            <?php if(is_array($adminlist)): foreach($adminlist as $key=>$vo): ?><tr>
                                    <td class="tc"><input name="id[]" value="59" type="checkbox"></td>
                                    <td>
                                        <input name="id" value="<?php echo ($vo["id"]); ?>" type="hidden">
                                        <input class="common-input sort-input" name="<?php echo ($vo["id"]); ?>" value="" type="text">
                                    </td>
                                    <td><?php echo ($vo["id"]); ?> </td>
                                    <td title="">
                                        <a target="_blank" href="#" title=""></a><?php echo ($vo["username"]); ?>
                                    </td>

                                    <td>
                                        <a class="" href="/mywebblog/index.php/Admin/Admin/edit/id/<?php echo ($vo["id"]); ?>">修改</a>
                                        <a class="link-del" href="/mywebblog/index.php/Admin/Admin/del/id/<?php echo ($vo["id"]); ?>">删除</a>
                                    </td>
                                </tr><?php endforeach; endif; ?>
                        </table>
                        <div class="list-page"> <?php echo ($curpages); ?>条 <?php echo ($currentpage); ?>/ <?php echo ($pagenum); ?> 页</div>
                        <div class="list-page"><?php echo ($pageinfo); ?></div>
                    </div>
                </form>
            </div>
        </div>
        <!--/main-->
    </div>
</body>

</html>