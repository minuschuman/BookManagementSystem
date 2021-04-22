<?php
include("valid.php");
include("connect.php");

$sql="UPDATE `users` SET `Active_status` = '0' WHERE id='".$_GET['id']."'";
echo 'Deactivated successfully.';
if($conn->query($sql))
{ ?>
  <script>
    alert('User Deactivated...');
    window.location='user.php';
  </script>
<?php
}else
{
	echo "Not Deleted";
}
?>
