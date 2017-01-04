<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/29
 * Time: 13:33
 */
header("Content-Type:text/html;charset=utf-8");
error_reporting(E_ALL ^ E_DEPRECATED);

$q=@mysql_connect("localhost","root","");
mysql_select_db("new",$q);
mysql_query("set names 'utf8'");