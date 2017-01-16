<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/30
 * Time: 13:51
 */
include ('../Model/MessageChange.php');
include ('../Model/User.php');
$user=new User();
$mess=new MessageChange();
$user->updateLevel( $_COOKIE['userid'],3);
$mess->add($_POST['title'],$_POST['content'] ,$_COOKIE['userid']);
echo "<script>location = '../View/view.php'</script>";
