<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Right</title>
</head>
<body>
     <form action="/think_message/index.php/Home/Message/doMess" method="post" enctype="multipart/form-data">
         新闻题目：<input type="text" name="title"/><br/>
         新闻内容：<textarea name="content"></textarea><br/>
         附　　件：<input type="file" name="filename"/><br/>
         <input type="submit" value="提交"/>
     </form>
</body>
</html>