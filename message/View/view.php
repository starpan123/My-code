<span style="font-family:Comic Sans MS;font-size:14px;"><?php
    include("../conn.php");
    $pagesize=2;//每页显示条数
    //数据总条数
    if(isset($_GET['page'])&&$_GET['page']!='') $page=$_GET['page'];
    else $page=0;
    $sql = "select a.uid,a.nickname,a.level,b.uid,b.title,b.content,b.mid,b.addtime from user a
            inner join message b on a.uid=b.uid  order by addtime desc";
    $numRecord = mysql_num_rows(mysql_query($sql));
    $totalpage = ceil($numRecord/$pagesize);
    $recordSql = $sql. " LIMIT ".$page*$pagesize.",".$pagesize;
    $result = mysql_query($recordSql);

    ?>
    <link href="../CSS/xinxing.css" type="text/css" rel="stylesheet">
    <link href="../CSS/board.css" rel="stylesheet">
    <center>
    <h2>我的留言板</h2>
           <a href="message.php">添加留言</a>|
             <a href="view.php">查看留言</a>|
             <a href="user.php">用户管理</a>
        <hr width="100%"/>
     <h3>留言查看</h3>
    </center>
    <div  style="padding: 20px 300px 10px;">
    <table width=500 border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#add3ef"  class="table table-bordered">
<?php
while ($row = mysql_fetch_array($result)){
    //setcookie("user[id]",$row['id'])
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
      <div align="right"><a href="../Controller/delete.php?id=<?=$row['mid']?>">删除</a></div>
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
        <?php
        if($page>0) echo "<a href='view.php?page=".($page-1)."'>上一页|</a>" ;
        if($page<$totalpage-1) echo "<a href='view.php?page=".($page+1)."'>下一页</a>" ;
        ?>
</table>
</div>
</span>