<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/23
 * Time: 12:26
 */
include ('conn.php');
if(isset($_POST["submit"]))
{
    $user = $_POST["username"];
    $psw =$_POST["password"];
    if($user == "" || $psw == "")
    {
        echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";
    }
    else
    {
        $sql = "select usertype from user where username = '$_POST[username]' and password = '$psw'";
        $result = mysql_query($sql,$q);
        $num = mysql_num_rows($result);
        if ($num)
        {
            $arr = mysql_fetch_array($result);
            if($arr['usertype']==0)
            {
                echo "<script>alert('登录成功！')</script>";
                echo "<script>location='addmessage.php'</script>";
            }
            else
            {
                echo "<script>alert('登录成功！')</script>";
                echo "<script>location='manage.php'</script>";
            }
        }
        else
        {
            echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>";
        }
    }
}
else
{
    echo "<script>alert('提交未成功！'); history.go(-1);</script>";
}
?>
