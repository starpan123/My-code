<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js fixed-layout">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amaze UI Admin index Examples</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="/yun/Public/Admin/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/yun/Public/Admin/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="/yun/Public/Admin/css/amazeui.min.css"/>
    <link rel="stylesheet" href="/yun/Public/Admin/css/admin.css">
    <script type="text/javascript" src="/yun/Public/Ckeditor/ckeditor.js"></script>
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
    以获得更好的体验！</p>
<![endif]-->

<header class="am-topbar am-topbar-inverse admin-header">
    <div class="am-topbar-brand">
        <strong>新闻发布</strong> <small>后台管理</small>
    </div>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

        <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
            <li><a href="javascript:;"><span class="am-icon-envelope-o"></span> 收件箱 <span class="am-badge am-badge-warning">5</span></a></li>
            <li class="am-dropdown" data-am-dropdown>
                <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                    <span class="am-icon-users"></span> 管理员 <span class="am-icon-caret-down"></span>
                </a>
                <ul class="am-dropdown-content">
                    <li><a href="#"><span class="am-icon-user"></span> 资料</a></li>
                    <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
                    <li><a href="#"><span class="am-icon-power-off"></span> 退出</a></li>
                </ul>
            </li>
            <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
        </ul>
    </div>
</header>
<div class="am-cf admin-main">
    <!-- sidebar start -->
    <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
        <div class="am-offcanvas-bar admin-offcanvas-bar">
            <ul class="am-list admin-sidebar-list">
                <li><a href="/yun/index.php/Admin/Index/index"><span class="am-icon-home"></span> 首页</a></li>
                <li><a href="/yun/index.php/Admin/News/index"><span class="am-icon-newspaper-o"></span>新闻发布</a></li>
            <div class="am-panel am-panel-default admin-sidebar-panel">
                <div class="am-panel-bd">
                    <p><span class="am-icon-bookmark"></span>当前系统时间</p>
                    <p><?php echo date('Y-m-d H:m:s',strtotime('now'));?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- sidebar end -->

    <!-- content start -->
    <div class="admin-content">




    <div class="admin-content">
        <div class="admin-content-body">
            <div class="am-cf am-padding am-padding-bottom-0">
                <div class="am-fl am-cf">
                    <strong class="am-text-primary am-text-lg">新闻</strong> /
                    <small>News</small>
                </div>
            </div>

            <hr>

            <div class="am-tabs am-margin" data-am-tabs="">
                <ul class="am-tabs-nav am-nav am-nav-tabs">
                    <li class="am-active"><a href="#tab2">详细描述</a></li>
                </ul>

                <div class="am-tabs-bd" style="touch-action: pan-y; -webkit-user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

                    <div class="am-tab-panel am-fade am-active am-in" id="tab2">
                        <form action="/yun/index.php/Admin/News/doNews" method="post" class="am-form" enctype="multipart/form-data">
                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    新闻标题
                                </div>
                                <div class="am-u-sm-8 am-u-md-4">
                                    <input type="text" name="title" class="am-input-sm">
                                </div>
                                <div class="am-hide-sm-only am-u-md-6">*必填，不可重复</div>
                            </div>

                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    封面图
                                </div>
                                <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                                    <input type="file" name="picture" class="am-input-sm">
                                </div>
                            </div>

                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    新闻作者
                                </div>
                                <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                                    <input type="text" name="author" class="am-input-sm">
                                </div>
                            </div>

                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    新闻来源
                                </div>
                                <div class="am-u-sm-8 am-u-md-4">
                                    <input type="text" name="source" class="am-input-sm">
                                </div>
                                <div class="am-hide-sm-only am-u-md-6">选填</div>
                            </div>

                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    内容摘要
                                </div>
                                <div class="am-u-sm-8 am-u-md-4">
                                    <input type="text" name="importance" class="am-input-sm">
                                </div>
                                <div class="am-u-sm-12 am-u-md-6">不填写则自动截取内容前255字符</div>
                            </div>

                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    上传文件
                                </div>
                                <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                                    <input type="file" name="filename" class="am-input-sm">
                                </div>
                                <div class="am-u-sm-12 am-u-md-6">文件可为图片、视频或其他</div>
                            </div>

                            <div class="am-g am-margin-top-sm">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right admin-form-text">
                                    内容描述
                                </div>
                                <div class="am-u-sm-12 am-u-md-10">
                                    <textarea  name="financial" placeholder="请使用富文本编辑插件"></textarea>
                                    <script type="text/javascript">CKEDITOR.replace('financial');</script>
                                </div>
                            </div>

                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    编辑时间
                                </div>
                                <div class="am-u-sm-8 am-u-md-10">

                                            <input type="date" name="edit_time" class="am-form-field am-input-sm">
                                </div>
                            </div>

                            <div class="am-g am-margin-top">
                                <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                    发布时间
                                </div>
                                <div class="am-u-sm-8 am-u-md-10">
                                            <input type="datetime-local" name="launch_time" class="am-form-field am-input-sm">
                                </div>
                            </div>
                            <div class="am-margin">
                                <input type="submit" value="提交保存" class="am-btn am-btn-primary am-btn-xs">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <footer class="admin-content-footer">
            <hr>
            <p class="am-padding-left">© 2016凯拓软件版权</p>
        </footer>
    </div>

<footer class="admin-content-footer">
    <hr>

</footer>
</div>
<!-- content end -->
</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/yun/Public/Admin/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/yun/Public/Admin/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="/yun/Public/Admin/js/amazeui.min.js"></script>
<script src="/yun/Public/Admin/js/app.js"></script>
</body>
</html>