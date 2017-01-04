<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/30
 * Time: 12:00
 */
include ('../conn.php');
class MessageChange{
    public function add($title,$content,$addtime,$uid)
    {
        $sql = "insert into message (title,content,addtime,uid)" .
            "values ('$title','$content','$addtime','$uid')";
        mysql_query($sql);
    }

    public function delete($id){
        $query="delete from message where mid=".$id;
        mysql_query($query);
    }

    
    public function getRow($uid)
    {
        $sql = "select * from message where uid=$uid";
        $result = mysql_query($sql);
        $num = mysql_num_rows($result);
        return $num;
    }

    public function getLevel($uid,$n){
        $level=$this->getRow($uid)/$n;
        return $level;
    }
}