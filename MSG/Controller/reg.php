<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/29
 * Time: 19:44
 */
include ('../Model/UserSet.php');
include ('../Model/User.php');
$userSet = new UserSet;
if (!isset($_POST['submit'])){
    echo "<script>alert('提交未成功！');</script>";
    return;
}
if (!$_POST['username'] || !$_POST['password'] || !$_POST['confirm']){
    echo "<script>alert('请确认信息完整性！');</script>";
    echo "<script>location='../View/register.php'</script>";
    return;
}

if ($_POST['password']!=$_POST['confirm']){
    echo "<script>alert('密码不一致！')";
    echo "<script>location='../View/register.php'</script>";
}

$num=$userSet->checkDuplicateName($_POST['username']);
        if ($num!=0){
            echo "<script>alert('用户名已存在'); history.go(-1);</script>";
        }
        else
        {
            $userSet->reg($_POST['username'],$_POST['password'] ,$_POST['tel'] ,$_POST['address'] ,$_POST['nickname'] );
            echo "<script>alert('注册成功！');</script>";
            echo "<script>location='../View/login.php'</script>";
        }










