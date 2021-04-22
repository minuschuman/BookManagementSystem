<?php
include 'valid.php';
include 'connect.php';
require_once("admincheck.php");
 ?>

<!DOCTYPE html>
  <head>
    <title></title>
    <style>
    #new{
      width: 30%;
      margin: auto 35%;
      padding: 2.5em 1em;
      background-color: skyblue;
      border-radius: 25px;
      margin-top: 2.5em;
    }

    #new input {
      width: 80%;
      margin: 8px 9%;
      height: 30px;
      text-align: center; 
      border-radius: 12px;
    }
    #new label{
      font-size: 18px;
    }
    </style>
    
  </head>
  <body>
    <?php require("menu.php"); ?>
    <div id="new">
      <form method="POST" action="book-entry.php">
          <input type="text" name="isbn" placeholder="ISBN" required><br/>
          <input type="text" name="author" placeholder="Author"><br/>
          <input type="text" name="bname" placeholder="Book title" required><br/>
          <input type="text" name="category" placeholder="Category"><br/>
          <input type="number" name="year" required placeholder="Year of publish"><br/>
          <input required="" type="adate" placeholder="Date arrived" onfocus="(this.type='date')"/><br/>
          <input type="text" name="price" placeholder="Price"><br/>
          <input type="number" name="num" required placeholder="Quantity"><br/>
        <input type="submit" value = "+ Add">
      </form>
    </div>
  </body>
</html>
