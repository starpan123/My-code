<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/6
 * Time: 10:28
 */
include("../conn.php");
include ("../Model/Page.php");
    $pagesize=2;//每页显示条数
    //数据总条数
  if(isset($_GET['page'])&&$_GET['page']!='') 
  {
      $page=$_GET['page'];
  }
  else {
      $page=0;
  }
   $pageOne=new Page();
   $countPages=$pageOne->countMessages($pagesize);
   $messagesList=$pageOne->record($page,$pagesize);
?>