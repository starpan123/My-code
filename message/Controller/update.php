<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/3
 * Time: 13:37
 */
include "../Model/User.php";
$user=new User();
$user->updateNickname($_POST['nickname'],$_COOKIE['userid'] );
echo "<script>location='../View/view.php'</script>";