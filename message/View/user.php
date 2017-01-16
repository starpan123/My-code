<!DOCTYPE html>
<html lang="zh-cn" xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="../CSS/xinxing.css" type="text/css" rel="stylesheet">
    <link href="../CSS/board.css" rel="stylesheet">
    <title>留言板提交</title>
</head>
<body>
<center>
    <h2>我的留言板</h2>
    <a href="message.php">添加留言</a>|
    <a href="view.php">查看留言</a>|
    <a href="user.php">用户管理</a>
    <hr width="90%"/>

    <h3>用户管理</h3>
    <div  style="padding: 50px 800px 10px;">
        <form class="bs-example bs-example-form" role="form" action="../Controller/update.php" method="post" name = "myform" onsubmit="return CheckPost();">
            <div class="input-group">
                <span class="input-group-addon">昵称</span>
                <input type="text" class="form-control" name="nickname" placeholder="">
            </div>
            <br/>
            <div class="form-group">
                <input type="submit" name="submit" value="修改"/>
                <button type="reset">重置</button>
            </div>
        </form>
    </div>
</center>
</body>
</html>