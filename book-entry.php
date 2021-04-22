<?php
  session_start();
  include 'connect.php';

  $isbn=$_POST['isbn'];
  $author=$_POST['author'];
  $title=$_POST['bname'];
  $category=$_POST['category'];
  $years=$_POST['year'];
  $arr_date=$_POST['adate'];
  $price=$_POST['price'];
  $Quantity=$_POST['num'];
  if(($_POST['isbn']==NUll) && ($_POST['bname']==NULL)){
     echo('fill "inputs" first');
     header("Location:book.php");
  }
  else {
    $sql = "INSERT into book (isbn,author,title,category,years,arr_date,price,Quantity)VALUES ('$isbn','$author','$title','$category','$years','$arr_date','$price','$Quantity')";

    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";

    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

  $conn->close();
}
header("Location:book.php");
?>
