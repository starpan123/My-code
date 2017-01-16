<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/2
 * Time: 22:52
 */
include ('../Model/MessageChange.php');
$mess=new MessageChange();
$id = $_COOKIE['mid'];
$mess->delete($id);
echo "<script>location='../View/view.php'</script>";
