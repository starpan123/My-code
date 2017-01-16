<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/30
 * Time: 17:01
 */
include ('../conn.php');
class User
{
    private $uid;
    private $usertype;
    private $username;
    private $password;
    public  $nickname;
    public  $level;

    public function getUsertype(){
        return $this->usertype ;
    }

    public function setName($username){
         $this->username = $username;
    }
    public function getName(){
        return $this->username; 
    }

    public function setUsertype($usertype){
        $this->usertype = $usertype;
    }

    public function setUserid($uid){
        $this->uid=$uid;
    }

    public function getUserid(){
        return $this->uid;
    }

    public function setNickName($nickname){
        $this->nickname=$nickname;
    }

    public function getNickName(){
        return $this->nickname;
    }

    public function setLevel($level){
        $this->level=$level;
    }

    public function getLevel(){
        return $this->level;
    }

    public function checkName(){
        if ($this->username){
            return 1;
        }else{
            return 0;
        }
    }

    public function updateNickname($nickname,$uid){
        $sql="update user set nickname='$nickname'  where uid=$uid";
        mysql_query($sql);
    }
    
    public function getMessageRows($uid)
    {
        $sql = "select * from message where uid=$uid";
        $result = mysql_query($sql);
        $num = mysql_num_rows($result);
        return $num;
    }

    public function updateLevel($uid,$n){
        $level=$this->getMessageRows($uid)/$n;
        $sql="update user set level=$level where uid=$uid";
        mysql_query($sql);
    }
}