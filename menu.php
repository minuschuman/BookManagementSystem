<?php
include_once 'valid.php';
?>
<link rel="stylesheet" href="style.css" type="text/css">
<div id="menu">
  <ul>
    <li><a href='book.php'>Books</a></li>
    <?php
    $name = $_SESSION['name'];
    if($_SESSION['user']==1){ //checking user or admin access
      $role = 'admin';
      ?>
      <li><a href="newbook.php">Add Book</a></li>
      <li><a href="user.php">Users</a></li>
      <li><a href="history.php">History</a></li>
      <li><a href="borrow.php">Send</a></li>

    <?php }
    else {
      $role= 'user';
      ?>
      <?php
    }
    ?>
    <li><a href="borrowview.php">you have</a></li>
    <a href="logout.php"><li onclick="return confirm('Are you sure you want to logout?')">Log Out</a></li>
    <a href="profile.php">
    <span id="role" style="display: inline-block; color: white;text-align: center; padding: 10px 16px; margin-right: 10px; font-size:20px; float:right;">
      <?php echo ucfirst ("$role : $name"); ?></a>
    </span></a>
  </ul>
</div>
