<?php
include ('../Controller/page.php')
?>
    <link href="../CSS/xinxing.css" type="text/css" rel="stylesheet">
    <link href="../CSS/board.css" rel="stylesheet">
    <center>
           <h2>我的留言板</h2>
           <a href="message.php">添加留言</a>|
        <?php
        if ($_COOKIE['usertype']==0){
            echo " <a href=\"view.php\">查看留言</a>";
        }
        else {
            echo "<a href=\"view.php\">管理留言</a>";
        }
        ?>|
             <a href="user.php">用户管理</a>
        <hr width="100%"/>
        <h3>留言查看</h3>    
    </center>
<div  style="padding: 20px 300px 10px;">
    <table width=500 border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#add3ef"  class="table table-bordered">
<?php
while($row = mysql_fetch_array($messagesList)){
   setcookie("mid",$row['mid'],time()+3600,'/');
?>
    <tr class="warning">
        <td>
        昵称：<?= $row['nickname']?>
        等级：LV<?=$row['level'] ?>
        </td>
    </tr>
    <tr class="active">
      <td>
          标题：<?= $row['title']?>
          <?php
            if ($_COOKIE['usertype']==1) {
               echo '  <div align="right"><a href="../Controller/delete.php">删除</a></div>';
            }
            ?>
      </td>
    </tr>
    <tr>
      <td>内容：<?= $row['content']?></td>
    </tr>
    <tr class="success">
       <td align="right">
         发布时间：<?= date('Y-m-d H:i:s',$row['addtime'])?>
       </td>
    </tr>
    <?php
}
?>
</table>
    <div align="center">
        <?php
        if($page>0){
            echo "<a href='view.php?page=".($page-1)."'>上一页|</a>" ;
        }
        if($page<$countPages-1) {
            echo "<a href='view.php?page=".($page+1)."'>下一页</a>" ;
        }
        ?>
    </div>
</div>
