<?php
include("valid.php");
include("connect.php");

$sql="UPDATE users set name='".$_POST['name']."', username='".$_POST['username']."', Active_status='".$_POST['status']."', user_level='".$_POST['user_level']."' where id='".$_GET['id']."'";
$result=$conn->query($sql);
header('location:user.php');
?>
