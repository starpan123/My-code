<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/30
 * Time: 12:00
 */
include ('../conn.php');
class MessageChange{
    public function add($title,$content,$uid)
    {
        $c=time();
        $sql = "insert into message (title,content,addtime,uid)" .
            "values ('$title','$content','$c','$uid')";
        mysql_query($sql);
    }

    public function delete($id){
        $query="delete from message where mid=".$id;
        mysql_query($query);
    }
    
    public function record($p,$size){
        $sql = "select a.uid,a.nickname,a.level,b.uid,b.title,b.content,b.mid,b.addtime from user a
            inner join message b on a.uid=b.uid  order by addtime desc";
        $recordSql = $sql. " LIMIT ".$p*$size.",".$size;
        $r= mysql_query($recordSql);
        $result= mysql_fetch_array($r);
        return $result;
    }
}