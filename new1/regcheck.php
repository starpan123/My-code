<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/23
 * Time: 15:29
 */
include('conn.php');
if(isset($_POST["submit"]))
{
    $user = $_POST["username"];
    $psw = md5($_POST["password"]);
    $psw_confirm = md5($_POST["confirm"]);
    if($user == "" || $psw == "" || $psw_confirm == "")
    {
        echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";
    }
    else
    {
        if($psw == $psw_confirm)
        {
            $sql = "select username from user where username = '$_POST[username]'"; //SQL语句
            $result=mysql_query($sql,$q);
            $num = mysql_num_rows($result);
            if($num)
            {
                echo "<script>alert('用户名已存在'); history.go(-1);</script>";
            }
            else
            {
                $sql_insert = "insert into user (username,password,tel,address) values('$_POST[username]','$psw','$_POST[tel]','$_POST[address]')";
                $res_insert = mysql_query($sql_insert,$q);
                if($res_insert)
                {
                    echo "<script>alert('注册成功！');</script>";
                    echo "<script>location='login.php'</script>";
                }
                else
                {
                    echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";
                }
            }
        }
        else
        {
            echo "<script>alert('密码不一致！'); history.go(-1);</script>";
        }
    }
}
else
{
    echo "<script>alert('提交未成功！'); history.go(-1);</script>";
}
?>