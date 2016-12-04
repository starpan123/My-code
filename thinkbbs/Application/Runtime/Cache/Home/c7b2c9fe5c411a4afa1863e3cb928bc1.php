<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>欢迎来到潘星的博客</title>
    <link href="/thinkbbs/Public/CSS/xinxing.css" type="text/css" rel="stylesheet">
    <link href="/thinkbbs/Public/CSS/board.css" rel="stylesheet">
</head>
<body>
      <div class="page-header">
             <h1>潘星的博客
                  <small>这里有各类编程语言</small>
             </h1>
      </div>

      <div id="user">
    <?php if(cookie('username')){?>
    <a href="#"><?php echo cookie('username');?></a>
    <a href="/thinkbbs/index.php/Home/User/logout">注销</a>
    <?php }else{ ?>
    <a href="/thinkbbs/index.php/Home/User/login">登录</a>
    <a href="/thinkbbs/index.php/Home/User/reg">注册</a>
    <?php } ?>
</div>

      <table class="table">
               <?php if(is_array($board)): foreach($board as $key=>$vo): ?><tr>
                            <td>第<?php echo ($key); ?>个</td>
                            <td><a href="/thinkbbs/index.php/Home/Board/detail/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></a></td>
                        </tr><?php endforeach; endif; ?>
      </table>
</body>
</html>