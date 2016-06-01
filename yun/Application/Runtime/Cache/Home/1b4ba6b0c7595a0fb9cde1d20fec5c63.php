<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Index Page | Amaze UI Example</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="alternate icon" type="image/png" href="/yun/Public/Home/i/favicon.png">
    <link rel="stylesheet" href="/yun/Public/Home/css/amazeui.min.css"/>
    <link rel="stylesheet" href="/yun/Public/Home/css/app.css"/>
</head>
<body>
<!-- 手机版侧滑菜单 -->
<div id="navPush" class="am-offcanvas nav-push-content">
    <div class="am-offcanvas-bar">
        <div class="am-offcanvas-content ">
            <ul class="am-menu am-menu-offcanvas1  menu-main am-no-layout">
                <li><a href="index.html" class="am-active">首页</a></li>
                <li><a href="products.html">产品</a></li>
                <li><a href="case.html">案例</a></li>
                <li><a href="signup.html">合作</a></li>
                <li><a href="pricing.html">定制</a></li>
                <li><a href="about.html">关于</a></li>
                <li><button class="am-btn am-btn-secondary am-topbar-btn am-btn-sm"><span class="am-icon-pencil"></span> 注册</button></li>
                <li><button class="am-btn am-btn-primary am-topbar-btn am-btn-sm"><span class="am-icon-user"></span> 登录</button></li>
            </ul>
        </div>
    </div>
</div>

<!-- 电脑和平板 菜单-->
<header class="am-topbar am-topbar-fixed-top">
    <div class="am-container">
        <h1 class="am-topbar-brand">
            <a href="#"><img src="/yun/Public/Home/images/logo.png" /></a>
        </h1>
        <button class="am-btn am-btn-primary am-show-sm-only nav-push-btn am-topbar-toggle " data-am-offcanvas="{target: '#navPush', effect: 'push'}">
            <span class="am-sr-only">导航切换</span>
            <span class="am-icon-bars"></span>
        </button>
        <div class="am-collapse am-topbar-collapse" id="collapse-head">
            <ul class="am-nav am-nav-pills am-topbar-nav">
                <li><a href="index.html" class="am-active">首页</a></li>
                <li><a href="products.html">产品</a></li>
                <li><a href="case.html">案例</a></li>
                <li><a href="signup.html">合作</a></li>
                <li><a href="pricing.html">定制</a></li>
                <li><a href="about.html">关于</a></li>
                <!-- 如果有二级菜单 以下是二级菜单代码 -->
                <!--<li class="am-dropdown" data-am-dropdown>
                  <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                    案例 <span class="am-icon-caret-down"></span>
                  </a>
                  <ul class="am-dropdown-content">
                    <li class="am-dropdown-header">标题</li>
                    <li><a href="#">1. 默认样式</a></li>
                    <li><a href="#">2. 基础设置</a></li>
                    <li><a href="#">3. 文字排版</a></li>
                    <li><a href="#">4. 网格系统</a></li>
                  </ul>
                </li>-->
                <!-- 登录注册按钮 -->
                <div class="am-topbar-right">
                    <button class="am-btn am-btn-secondary am-topbar-btn am-btn-sm"><span class="am-icon-pencil"></span> 注册</button>
                </div>
                <div class="am-topbar-right">
                    <button class="am-btn am-btn-primary am-topbar-btn am-btn-sm"><span class="am-icon-user"></span> 登录</button>
                </div>
            </ul>
        </div>
    </div>
</header>


<!-- footer -->
<footer>
    <div class="am-container">
        <div class="footer-logo">
            <img src="/yun/Public/Home/images/logo-colorful.png" />
        </div>
        <ul class="social-links-list">
            <li>
                <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=744071477&amp;site=qq&amp;menu=yes" target="_blank" title="qq">
                    <i class="am-icon-qq am-icon-sm"></i>
                </a>
            </li>
            <li>
                <a href="" target="_blank" id="wechat" title="微信">
                    <i class="am-icon-weixin am-icon-sm"></i>
                </a>
            </li>
            <li>
                <a href="http://weibo.com/allmobilize" target="_blank" title="新浪微博">
                    <i class="am-icon-weibo am-icon-sm"></i>
                </a>
            </li>
        </ul>
        <ul class="footer-nav">
            <li>
                <a href="/about.html">关于我们</a>
            </li>
            <li>
                <a href="/faq.html">常见问题</a>
            </li>
            <li>
                <a href="/build.html">移动建站白皮书</a>
            </li>
            <li>
                <a href="http://dev.yunshipei.com/">开发者中心</a>
            </li>
        </ul>
        <ul class="friend-links">
            <li>友情链接：</li>
            <li>
                <a href="http://segmentfault.com/" target="_blank" title="SegmentFault">SegmentFault</a>
            </li>
            <li>
                <a href="http://www.zjgsq.com/" target="_blank" title="Web前端">Web前端</a>
            </li>
            <li>
                <a href="http://apicloud.com/" target="_blank" title="APICloud">APICloud</a>
            </li>
            <li>
                <a href="http://www.w3cdream.com/" target="_blank" title="W3C梦想站">W3C梦想站</a>
            </li>
            <li>
                <a href="http://bbs.egret-labs.org/" target="_blank" title="Egret社区">Egret社区</a>
            </li>
            <li>
                <a href="https://meiqia.com/integrations" target="_blank" title="美洽客服">美洽客服</a>
            </li>
        </ul>
    </div>
</footer>

<!-- 微信弹出框 -->
<div class="weixin-mod">
    <div class="weixin-inner">
        <a class="weixin-close"><i class="am-icon-times-circle"></i></a>
        <div class="qrcode-weixin">
            <img src="/yun/Public/Home/images/qrcode-weixin.jpg" alt="">
        </div>
        <div class="weixin-info">在微信上关注我们</div>
    </div>
</div>
</body>
<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/yun/Public/Home/js/polyfill/rem.min.js"></script>
<script src="/yun/Public/Home/js/polyfill/respond.min.js"></script>
<script src="/yun/Public/Home/js/amazeui.legacy.js"></script>
<![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/yun/Public/Home/js/jquery.min.js"></script>
<script src="/yun/Public/Home/js/amazeui.min.js"></script>
<script src="/yun/Public/Home/js/app.js"></script>
<!--<![endif]-->
</html>