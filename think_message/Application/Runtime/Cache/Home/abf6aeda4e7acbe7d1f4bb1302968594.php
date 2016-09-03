<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reg</title>
    <link rel="stylesheet" type="text/css" href="/think_message/Public/Css/basic.css" />
    <link rel="stylesheet" type="text/css" href="/think_message/Public/Css/Application/reg.css" />
    <script type="text/javascript" src="/think_message/Public/Js/jquery.js"></script>
    <script>
        $(function () {
            var error=new Array();
             $('input[name="username"]').blur(function () {

                 var username=$(this).val();
                 $.get('/think_message/index.php/Home/Register/checkName',{'username':username},function (data) {
                      if(data=='不允许注册'){
                          error['username']=1;
                          $('input[name="username"]').after('<p id="umessage" style="color: red">该用户名已注册</p>')
                      }else{
                          error['username']=0;
                           $('#umessage').remove();
                      }
                 });
             });
            //提交表单
            $('img.register').click(function () {
                if(error['username']==1){
                     return false;
                }else {
                    $('form[name="myForm"]').submit();
                }
            });
        });
    </script>
</head>
<body>
<form action="/think_message/index.php/Home/Register/doReg" method="post" name="myForm">
    用 户 名：<input type="text" name="username"/><br/>
    密　　码：<input type="password" name="password"/><br/>
    确认密码：<input type="password" name="repassword"/><br/>
    性　　别：<input type="radio" name="sex" value="1" class="radio"/>男
          <input type="radio" name="sex" value="0" class="radio"/>女<br/>
    验 证 码：<input type="text" name="code"><br/>
    <img src="/think_message/index.php/Home/Public/code" onclick='this.src=this.src+"?"+Math.random()'/>
    <img src="/think_message/Public/Images/register.gif"  class="register"/>
    <img src="/think_message/Public/Images/reset.gif" class="reset"/>

</form>
</body>
</html>