<?php
include("valid.php");
include("connect.php");
$id=$_GET['id'];
$sql="UPDATE `borrow` SET `return_status` = '1' WHERE brid=$id";

$result=mysqli_query($conn,$sql);
if ($conn->query($sql) === TRUE) {
    $sql2="UPDATE `book`natural join `borrow` SET `Quantity` = Quantity+1 WHERE `brid` = $id";
    $result2=mysqli_query($conn,$sql2);
    ?>
    <script type="text/javascript">
      alert("saved");
      window.location='history.php';
    </script>
    <?php
} 
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    ?>
    <script type="text/javascript">
      alert("something went wrong");
      window.history.back();
    </script>
    <?php
  }
?>