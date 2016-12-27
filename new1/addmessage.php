<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/23
 * Time: 12:06
 */
include ('conn.php');
$a=$_COOKIE['user']['username'];
if(@$_POST['submit']){
    $sql="insert into message (username,title,content,addtime)" .
        "values ('$a','$_POST[title]','$_POST[content]',now())";
    mysql_query($sql,$q);

        echo "<script>location = 'view.php'</script>";
}