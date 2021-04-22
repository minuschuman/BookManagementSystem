<?php
session_start();
include("connect.php");
$uname = $_POST['uname'];
$pass  = md5($_POST['pass']);

$sql="SELECT * FROM users WHERE  password='$pass' and username='$uname'";

$result=mysqli_query($conn,$sql);
  if ($result && mysqli_num_rows($result) == 1) {
      $row = $result->fetch_assoc();
      if($row['Active_status']==1){
      /*storing data for later*/
      $_SESSION['name']=$row['name'];
      $_SESSION['uname']=$row['username'];
      $_SESSION['password']=$row['password'];
      $_SESSION['user']=$row['user_level'];
      header("Location:book.php");
    }else { ?>
      <script>
    		alert('You are not activate yet');
    		window.location='index.php';
    	</script>
    <?php }

  } else {?>
    <script>
  		alert('Invalid User or Password...');
  		window.location='index.php';
  	</script>
  <?php
  }
?>
