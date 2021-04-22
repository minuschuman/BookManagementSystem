<?php
include("valid.php");
include("connect.php");

$sql="UPDATE `users` SET `Active_status` = '1' WHERE id='".$_GET['id']."'";
echo 'Activated successfully.';
if($conn->query($sql))
{ ?>
  <script>
    alert('User Activated...');
    window.location='user.php';
  </script>
<?php
}else
{
	echo "Not Deleted";
}
?>
