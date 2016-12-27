<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>留言板</title>
    <link href="CSS/xinxing.css" type="text/css" rel="stylesheet"/>
    <link href = "CSS/signin.css" rel = "stylesheet">
</head>
<body>
<form   action = "logincheck.php"  method="post"  class="form-signin" role="form">
    <h2 class="form-signin-heading" align="center">留言板用户登录</h2>
    <input name = "username" type="text" class="form-control" placeholder="用户名"  autofocus>
    <input name = "xin" type = "hidden" /><br/>
    <input name = "password"  type="password" class="form-control" placeholder="密码" >
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">登录</button>
    <a href="register.php" class="btn btn-lg btn-primary btn-block">注册</a>
</form>
</body>
</html>