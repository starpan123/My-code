<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/29
 * Time: 19:39
 */    
include ('../conn.php');
class UserSet{

    public function login($username,$password)
    {
        
        $name = $username;
        $pwd = md5($password);
        $sql = "select * from user where username = '$name' and password = '$pwd'";
        $result = mysql_query($sql);
        $num = mysql_num_rows($result);
        if ($num) {
        $arr = mysql_fetch_array($result);
        $user = new User();
        $user->setName($arr['username']);
        $user->setUsertype($arr['usertype']);
        $user->setUserid($arr['uid']);
        $user->setNickName($arr['nickname']);
        $user->setLevel($arr['level']);    
        return $user;
    }else{
            return null;
        }

    }
    public function reg($username,$password,$tel,$address,$nickname)
    {
        $name = $username;
        $pwd = md5($password);
        $sql_insert = "insert into user (username,password,tel,address,nickname) values('$name','$pwd','$tel','$address','$nickname')";
            mysql_query($sql_insert);
        }

    public function  checkDuplicateName($username){
        $sql = "select * from user where username = '$username'"; //SQL语句
        $result = mysql_query($sql);
        $num = mysql_num_rows($result);
        return $num;
    }
}