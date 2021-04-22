<?php
  
  include 'connect.php';



  $sql= "SELECT isbn,author,title,category,years,arr_date,price,Quantity FROM book";
  $result=$conn->query($sql);
 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Books | BMS</title>
    <style>

    </style>
    <link rel="stylesheet" href="style.css" type="text/css">
  </head>
  <body>
    <?php require("menu.php"); ?>
    <div id="books">
    <table border="1px">
      <thead>
        <tr>
          <th>SN</th>
          <th>Title</th>
          <th>Author</th>
          <th>ISBN</th>
          <!-- <th>Category</th> -->
          <th>Published Years</th>
          <th>Arrived Date</th>
          <th>Price</th>
          <th>Quantity</th>
        </tr>
      </thead>
      <tbody>
        <?php
          if (!empty($result)) {
            $i=0;
            foreach ($result as $row) { 
              $i++;  
            ?>  
            <tr>
              <td><?php echo $i;?></td>
              <td><?php echo $row['title']; ?></td>
              <td><?php echo $row['author']; ?></td>
              <td><?php echo $row['isbn']; ?></td>
              <!-- <td><?php echo $row['category']; ?></td> -->
              <td><?php echo  $row['years']; ?></td>
              <td><?php echo  $row['arr_date']; ?></td>
              <td><?php echo  $row['price']; ?></td>
              <td><?php echo  $row['Quantity']; ?></td>
            </tr>
          <?php }
        } ?>
      </tbody>
    </table>
    </div>
  </body>
</html>
