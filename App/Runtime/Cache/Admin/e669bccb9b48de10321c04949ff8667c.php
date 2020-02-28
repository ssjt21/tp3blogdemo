<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="/mywebblog/App/Admin/Public/css/common.css" />
    <link rel="stylesheet" type="text/css" href="/mywebblog/App/Admin/Public/css/main.css" />
    <script type="text/javascript" src="/mywebblog/App/Admin/Public/js/libs/modernizr.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/mywebblog/App/Admin/Public/Ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src=" /mywebblog/App/Admin/Public/Ueditor/ueditor.all.min.js ">
    </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript " charset="utf-8 " src="/mywebblog/App/Admin/Public/Ueditor/lang/zh-cn/zh-cn.js"></script>

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
                <div class="crumb-list"><i class="icon-font"></i><a href="/mywebblog/index.php/Admin/Index">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/mywebblog/index.php/Admin/Article/index">作品管理</a><span class="crumb-step">&gt;</span><span>新增作品</span></div>
            </div>
            <div class="result-wrap">
                <div class="result-content">
                    <form action="/mywebblog/index.php/Admin/Article/insert" method="post" id="myform" name="myform" enctype="multipart/form-data">
                        <table class="insert-tab" width="100%">
                            <tbody>
                                <tr>
                                    <th width="120"><i class="require-red">*</i>分类：</th>
                                    <td>
                                        <select name="cateid" id="catid" class="required">
                                    <option >请选择</option>
                                    <?php if(is_array($catelist)): foreach($catelist as $key=>$cate): ?><option name="cateid" value="<?php echo ($cate["id"]); ?>"><?php echo ($cate["catename"]); ?></option><?php endforeach; endif; ?>
                                </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th><i class="require-red">*</i>标题：</th>
                                    <td>
                                        <input class="common-text required" id="title" name="title" size="50" value="" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <th>作者：</th>
                                    <td><input class="common-text" name="author" size="50" value="admin" type="text"></td>
                                </tr>
                                <tr>
                                    <th><i class="require-red">*</i>缩略图：</th>
                                    <td><input name="pic" id="" type="file">
                                        <!--<input type="submit" onclick="submitForm('/jscss/admin/design/upload')" value="上传图片"/>--></td>
                                </tr>
                                <tr>
                                    <input name="addtime" type="hidden">
                                    <th><i class="require-red">*</i>描述：</th>
                                    <td><input class="common-text required" id="title" name="adesc" size="50" value="" type="text">
                                        <!--<input type="submit" onclick="submitForm('/jscss/admin/design/upload')" value="上传图片"/>--></td>
                                </tr>
                                <tr>
                                    <th>内容：</th>

                                    <td><textarea name="content" class="common-textarea" id="editor" style="width: 98%;">
                                      
                                        </textarea>
                                        <script type="text/javascript">
                                            //实例化编辑器
                                            //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
                                            var ue = UE.getEditor('editor');
                                            UE.getEditor('editor', {
                                                initialFrameWidth: 1000,
                                                initialFrameHeight: 400
                                            });
                                        </script>

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