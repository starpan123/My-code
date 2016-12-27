<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/23
 * Time: 9:54
 */
header("Content-Type:text/html;charset=utf-8");
error_reporting(E_ALL ^ E_DEPRECATED);

$q = @mysql_connect("localhost","root","") or die("数据库连接错误！");
mysql_select_db("new",$q);
mysql_query("set names 'utf8'");