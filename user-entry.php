<?php
  session_start();
  include 'connect.php';

  //$bkid=$_POST[''];
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $mail=$_POST['mail'];
  $mob=$_POST['mob'];
  $uname=$_POST['uname'];
  $pass1=md5($_POST['pass1']);
  $pass2=md5($_POST['pass2']);
  $name = "$fname $lname";
  if($pass1!== $pass2){
    echo('fill "inputs" first');
  }
  echo "$pass1";
  if(($_POST['uname']==NUll) && ($_POST['pass1']==NULL)){?>
    <script type="text/javascript">
      alert('fill "inputs" first');
    </script>
    <?php header("Location:index.php");
  }
  else {
    $sql = "INSERT INTO `users` (`name`,`username`,`password`,`user_level`,`mobile`,`mail`,`last_login`)
    VALUES ('$name','$uname','$pass1','0','$mob','$mail','0:0')";

    if ($conn->query($sql) === TRUE) {
      ?>
      <script type="text/javascript">
        alert("hello <?php echo $name ?>\n you will member soon");
      </script>
      <?php
      header("Location:book.php");
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

  $conn->close();
}


?>
