<?php
session_start();
require("connect.php");
date_default_timezone_set("Asia/Kathmandu");
$id=$_POST['id'];
$book=$_POST['book'];
$bdate=date("Y-m-d");
$date=date_create($bdate);
date_add($date,date_interval_create_from_date_string("30 days"));
$rdate = date_format($date,"Y-m-d");
//echo $rdate;
$name = $_SESSION['name'];
$sql1="SELECT Quantity FROM `book` where bkid= $book";
$result1=$conn->query($sql1);
if (!empty($result1)) {
  foreach ($result1 as $row1) {
    $qty = $row1['Quantity'];
  }


  
  if($qty>0){
    $sql="INSERT INTO borrow (bkid,id,borrow_date,return_date,issued_by) VALUES ($book,$id,'$bdate','$rdate','$name')";
    $result=mysqli_query($conn,$sql);
    if ($result === TRUE) {
        $sql2="UPDATE `book` SET `Quantity` = Quantity-1 WHERE `bkid` = $book";
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
  }
  else{
    ?>
    <script type="text/javascript">
      alert("out of stock");
      window.history.back();
    </script>
    <?php
  }
}else{ 
  echo "Error: " . $sql1 . "<br>" . $conn->error; }
?>