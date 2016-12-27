
<?php
include 'conn.php';
$id = $_GET['id'];
$query="delete from message where id=".$id;
mysql_query($query);
?>
<?php
$url = "view.php";
echo "<script language='javascript' type='text/javascript'>";
echo "window.location.href='$url'";
echo "</script>";
?> 
