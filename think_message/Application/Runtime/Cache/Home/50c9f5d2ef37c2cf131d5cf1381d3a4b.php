<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="/think_message/Public/Css/basic.css" />
    <link rel="stylesheet" type="text/css" href="/think_message/Public/Css/Application/login.css" />
    <script type="text/javascript" src="/think_message/Public/Js/jquery.js"></script>
    <script>
        $(function () {
                  $('img[title="login"]').click(function () {
                      $('form[name="myForm"]').submit();
                  });
                  $('img[class="register"]').click(function () {
                      window.location='/think_message/index.php/Home/Register/reg';
                      
                  })
        });
    </script>
</head>
<body>
         <form action="/think_message/index.php/Home/Login/doLogin" method="post" name="myForm">
             用户名：<input type="text" name="username"/><br/>
             密　码：<input type="password" name="password"/><br/>
             验证码：<input type="text" name="code"><br/>
             <img src="/think_message/index.php/Home/Public/code" onclick='this.src=this.src+"?"+Math.random()'/>
             <img src="/think_message/Public/Images/login.gif" title="login" class="submit"/>
             <img src="/think_message/Public/Images/register.gif" class="register"/>

         </form>
</body>
</html>