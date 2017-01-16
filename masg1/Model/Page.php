<?php

class Page
{
    public function countMessages($size)
    {
        $sql = "select * from message";
        $tmp = mysql_query($sql) or trigger_error(mysql_error() );
        $numRecord = mysql_num_rows($tmp);
        $totalpage = ceil($numRecord / $size);
        return $totalpage;
    }

    public function record($p,$size){
        $sql = "select a.uid,a.nickname,a.level,b.uid,b.title,b.content,b.mid,b.addtime from user a
            inner join message b on a.uid=b.uid  order by addtime desc";
        $recordSql = $sql. " LIMIT ".$p*$size.",".$size;
        $r= mysql_query($recordSql);
        return $r;
    }
}
