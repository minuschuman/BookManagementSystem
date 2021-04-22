<?php
include 'valid.php';
include 'connect.php';
require_once("admincheck.php");
?>
<?php 
include 'connect.php';
$sql="SELECT bo.title as title, u.name as name,b.borrow_date as bdate , b.return_date as rdate, b.Issued_by as iss  FROM book as bo natural join borrow as b natural join users as u";
$result=$conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php require("menu.php"); ?>
<form method="GET" name="usrsrch" id="usrsrch">
    <input type="text" name="text" placeholder="User Name" onkeyup="loadcont(this.value);">
    <input type="text" name="book" placeholder="Book Name" onkeyup="loadcont(this.value);">
</form>
<p id="userbody">
<form action="save_borrow.php" method="POST">
  <input type="number" placeholder="User's ID" name="id">
  <input type="text" placeholder="Book's ID" name="book">
  <input type="submit" value="register">
</form>
</body>
</html>
<script>
  function loadcont(){
    var xhttp = new XMLHttpRequest();
    var txt = document.usrsrch.text.value;
    var txt1 = document.usrsrch.book.value;
    xhttp.open("GET","usersearcher.php?text="+txt+"&book="+txt1,true);
    xhttp.onreadystatechange=function(){
      if((this.status==200)&&(this.readyState==4)){
        document.getElementById("userbody").innerHTML=this.responseText;
      }
    }
    xhttp.send();
  }
</script>