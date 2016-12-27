<!DOCTYPE html>
<html lang="zh-cn" xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="CSS/xinxing.css" type="text/css" rel="stylesheet">
    <link href="CSS/board.css" rel="stylesheet">
    <title>留言板提交</title>
</head>
<body>
<SCRIPT language=javascript>
    function CheckPost()
    {
        if (myform.username.value=="")
        {
            alert("请填写用户名");
            myform.user.focus();
            return false;
        }
        if (myform.title.value.length<5)
        {
            alert("标题不能少于5个字符");
            myform.title.focus();
            return false;
        }
        if (myform.content.value=="")
        {
            alert("必须要填写留言内容");
            myform.content.focus();
            return false;
        }

    }
</SCRIPT>
<center>
    <h2>我的留言板</h2>
    <a href="message.php">添加留言</a>|
    <?php
        if ($_COOKIE['user']['usertype']==0){
            echo " <a href=\"view.php\">查看留言</a>";
        }else echo "<a href=\"view.php\">管理留言</a>"
    ?>
    <hr width="90%"/>

    <h3>留言添加</h3>
    <div  style="padding: 50px 500px 10px;">
    <form class="bs-example bs-example-form" role="form" action="addmessage.php" method="post" name = "myform" onsubmit="return CheckPost();">
            <div class="input-group">
                <span class="input-group-addon">标题</span>
                <input type="text" class="form-control" name="title" placeholder="">
            </div>
            <br/>
            <br/>
           <div class="form-group">
              <textarea class="form-control" rows="10" name="content" placeholder="留言内容......"></textarea>
           </div>
           <div class="form-group">
               <input type="submit" name="submit" value="提交"/>
               <button type="reset">重置</button>
           </div>
    </form>
    </div>

</center>
</body>
</html>