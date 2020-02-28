<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="applicable-device" content="pc">
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" type="text/css" media="screen" href="/mywebblog/Public/style/style.css" />
    <link rel="shortcut icon" href="" />
    <script src="/mywebblog/Public/style/jquery.min.js"></script>
    <script src="/mywebblog/Public/style/post.js"></script>
    <title>随时静听--<?php echo ($articleOne); ?></title>
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/72x72\/",
            "ext": ".png",
            "source": {
                "concatemoji": "http:\/\/yispace.net\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.5.2"
            }
        };
        ! function(a, b, c) {
            function d(a) {
                var c, d, e, f = b.createElement("canvas"),
                    g = f.getContext && f.getContext("2d"),
                    h = String.fromCharCode;
                if (!g || !g.fillText) return !1;
                switch (g.textBaseline = "top", g.font = "600 32px Arial", a) {
                    case "flag":
                        return g.fillText(h(55356, 56806, 55356, 56826), 0, 0), f.toDataURL().length > 3e3;
                    case "diversity":
                        return g.fillText(h(55356, 57221), 0, 0), c = g.getImageData(16, 16, 1, 1).data, d = c[0] + "," + c[1] + "," + c[2] + "," + c[3], g.fillText(h(55356, 57221, 55356, 57343), 0, 0), c = g.getImageData(16, 16, 1, 1).data, e = c[0] + "," + c[1] + "," + c[2] + "," + c[3], d !== e;
                    case "simple":
                        return g.fillText(h(55357, 56835), 0, 0), 0 !== g.getImageData(16, 16, 1, 1).data[0];
                    case "unicode8":
                        return g.fillText(h(55356, 57135), 0, 0), 0 !== g.getImageData(16, 16, 1, 1).data[0]
                }
                return !1
            }

            function e(a) {
                var c = b.createElement("script");
                c.src = a, c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
            }

            var f, g, h, i;
            for (i = Array("simple", "flag", "unicode8", "diversity"), c.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, h = 0; h < i.length; h++) c.supports[i[h]] = d(i[h]), c.supports.everything = c.supports.everything && c.supports[i[h]], "flag" !== i[h] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[i[h]]);
            c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function() {
                c.DOMReady = !0
            }, c.supports.everything || (g = function() {
                c.readyCallback()
            }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", g, !1), a.addEventListener("load", g, !1)) : (a.attachEvent("onload", g), b.attachEvent("onreadystatechange", function() {
                "complete" === b.readyState && c.readyCallback()
            })), f = c.source || {}, f.concatemoji ? e(f.concatemoji) : f.wpemoji && f.twemoji && (e(f.twemoji), e(f.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>


    <meta name="keywords" content="SSJT,王帝,随时静听" />
    <meta name="description" content="SSJT,王帝,随时静听" />

    <!-- 跳出 -->
    <script type="text/javascript">
        /*frame*/
        if (top.location != self.location) {
            top.location = self.location
        }
    </script>

</head>

<body class="single single-post postid-42805 single-format-standard">
    <div class="img">
    <img src=<?php if($articleOne["pic"] != ''): ?>/mywebblog/Public/<?php echo ($articleOne["pic"]); ?>
    <?php else: ?>/mywebblog/Public/images/tooopen.jpg<?php endif; ?> height="300" width="100%">
</div>
<div class="topbar">
    <div class="inner">

        <ul class="nav">
            <?php if(is_array($catelist)): $i = 0; $__LIST__ = $catelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li id="menu-item-180" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-180">
                    <if condition="<?php echo ($vo["id <=8"]); ?>"><a href="/mywebblog/index.php/Home/Cate/index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["catename"]); ?></a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>

        </ul>

        <ul class="nav topmenu">
            <li id="menu-item-12460" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12460"><a href="/mywebblog/index.php/Admin/Login/">后台登录</a></li>
        </ul>
    </div>
</div>
    </div>

    <div class="wrapper">
        <div class="content">

            <div class="meta">
                <h1 class="meta-tit"><?php echo ($articleOne["title"]); ?></h1>
                <p class="meta-info">发表：<a href="/mywebblog/index.php/Home/Index/">SSJT</a> &nbsp;&nbsp; 发表日期：<?php echo (date('y-m-d',$articleOnes["addtime"])); ?>&nbsp;&nbsp; </p>
            </div>

            <!-- 广告代码2 -->

            <div class="entry">
                <p><img src="/mywebblog/Public/<?php echo ($articleOne["pic"]); ?>" alt="<?php echo ($articleOne["adesc"]); ?>" width="630" height="399" /></p>
                <p>作者：<?php echo ($articleOne["author"]); ?><br/> 来源：<?php echo ($articleOne["author"]); ?> </p>
                <?php echo (htmlspecialchars_decode($articleOne["content"])); ?>

            </div>



            <!--<div>
                <strong>上一篇：</strong>
                <a class="prev-post icon-right" href="http://yispace.net/42797.html">
                那些越想炫耀自己的人，往往生活过得越糟糕</a>
            </div>-->

            <!--<div style="margin:10px 0;">
                <strong>下一篇：</strong>
                <a class="next-post" href="javascript:alert('你正在看的文章已经是最新的了...');">
                木有啦</a>
            </div>-->

            <!-- 分享代码 -->
            <div class="baidufenxiang" style="overflow:auto;">
                <!-- Baidu Button BEGIN -->
                <div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare">

                </div>
                <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=53164"></script>
                <script type="text/javascript" id="bdshell_js"></script>
                <script type="text/javascript">
                    document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date() / 3600000)
                </script>
                <!-- Baidu Button END -->
            </div>


            <div style="margin-left: -12px; margin-bottom: -3px;">
                <script>
                    document.write(unescape('%3Cdiv id="hm_t_61751"%3E%3C/div%3E%3Cscript charset="utf-8" src="http://crs.baidu.com/t.js?siteId=99c2c06a529fc4c8787deb597141fe76&planId=61751&async=0&referer=') + encodeURIComponent(document.referrer) + '&title=' + encodeURIComponent(document.title) + '&rnd=' + (+new Date) + unescape('"%3E%3C/script%3E'));
                </script>
            </div>


        </div>

        <div class="sidebar">
    <img src="/mywebblog/Public/images/56.jpg" height="150" width="300">
    <div class="widget widget_categories">
        <h3 class="widget-tit">文章分类</h3>
        <ul>
            <?php if(is_array($catelist)): $i = 0; $__LIST__ = $catelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="cat-item cat-item-3770">
                    <a href="/mywebblog/index.php/Home/Cate/index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["catename"]); ?></a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <div class="widget widget_recent_entries">
        <h3 class="widget-tit">最新发表</h3>
        <ul>
            <?php if(is_array($articlelist)): $i = 0; $__LIST__ = $articlelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                    <a href="/mywebblog/index.php/Home/Article/Index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>

        </ul>
    </div>
    <div class="widget widget_links">
        <h3 class="widget-tit">友情链接</h3>
        <ul class='xoxo blogroll'>
            <?php if(is_array($flinklist)): $i = 0; $__LIST__ = $flinklist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["url"]); ?>" rel="friend" target="_blank"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>


        </ul>
    </div>
</div>
    </div>

    <div id="bottom">
        <div id="bottom-content">
            <div id="content-left">
                <p> 网站位置 | 关于我们 | 意见反馈 |</p>
            </div>
            <div id="content-right">
                <p>友情链接</p>

            </div>
        </div>
    </div>




</body>

</html>

<!-- Dynamic page generated in 0.509 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2016-08-23 19:33:53 -->

<!-- super cache -->