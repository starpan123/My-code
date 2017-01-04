<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>留言板</title>
    <link href="../CSS/xinxing.css" type="text/css" rel="stylesheet"/>
    <link href = "../CSS/signin.css" rel = "stylesheet">
</head>
<body>
<form   action = "../Controller/reg.php"  method="post"  class="form-signin" role="form">
    <h2 class="form-signin-heading" align="center">留言板用户注册</h2>
    <input name = "username" type="text" class="form-control" placeholder="用户名"  autofocus>
    <input name = "xin" type = "hidden" /><br/>
    <input name = "password"  type="password" class="form-control" placeholder="密码" ><br/>
    <input  name="confirm" type="password" class="form-control" placeholder="确认密码"/><br/>
    <input name="nickname" type="text" class="form-control" placeholder="昵称"><br/>
    <input name="tel" type="text" class="form-control" placeholder="电话"><br/>
    <input name="address" type="text" class="form-control" placeholder="地址"><br/>
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">注册</button>
</form>
</body>
</html>
