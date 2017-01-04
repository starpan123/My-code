<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/29
 * Time: 19:44
 */
include ('../Model/UserSet.php');
include ('../Model/User.php');
$a=new UserSet();
if (!isset($_POST['submit'])){
    echo "<script>alert('提交未成功！');</script>";
    echo "<script>location='../View/login.php'</script>";
    return;
}
if (!$_POST['username'] || !$_POST['password']){
    echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";
    return;
}


$user=$a->login($_POST['username'], $_POST['password']);
 if ($user){
       setcookie("username",$user->getName());
       setcookie("usertype",$user->getUsertype());
       setcookie("userid",$user->getUserid());
       setcookie("nickname",$user->getNickName());
       setcookie("level",$user->getLevel());
    // $_SESSION['username']=$user->getName();
    // $_SESSION['usertype']=$user->isAdmin();
     if ($user->getUsertype()==1){
         echo "<script>alert('登录成功！')</script>";
         echo "<script>location='../View/view.php'</script>";
     }else{
         echo "<script>alert('登录成功！')</script>";
         echo "<script>location='../View/message.php'</script>";
     }
 }else{
     echo "<script>alert('用户名或密码不正确！')</script>";
     echo "<script>location='../View/login.php'</script>";
 }

