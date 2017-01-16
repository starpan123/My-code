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
$level=$mess->getLevel($_COOKIE['userid'], 3);
$user->updateLevel($level, $_COOKIE['userid']);
$mess->add($_POST['title'],$_POST['content'] ,time() ,$_COOKIE['userid']);
echo "<script>location = '../View/view.php'</script>";
