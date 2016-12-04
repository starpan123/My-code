<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>2016年潘星简易的登录界面</title>
    <link href="/thinkbbs/Public/CSS/xinxing.css" type="text/css" rel="stylesheet"/>
    <link href="/thinkbbs/Public/CSS/signin.css" rel="stylesheet">
</head>
<body>
<form action="/thinkbbs/Home/User/checkreg" method="post" class="form-signin"
      role="form">
    <h2 class="form-signin-heading">潘星的简易博客</h2>
    <input name="email" type="email" class="form-control" placeholder="账号"
           autofocus>
    <input name="xin" type="hidden"/><br>
    <input name="pwd" type="password" class="form-control" placeholder="密码">
    <button class="btn btn-lg btn-primary btn-block" type="submit">注册</button>
</form>
</body>
</html>