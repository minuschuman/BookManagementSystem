<?php
require("connect.php");
if(($_REQUEST['text']!=null)||($_REQUEST['book']!=null)){
  /*****************************************/
  if($_REQUEST['text']!=null){
    $var1 = $_REQUEST['text']."%";
    $sql="SELECT * FROM users WHERE name Like '$var1'";
    $result=mysqli_query($conn,$sql);
    $arr_users = [];
    if ($result->num_rows > 0) {
        $arr_users = $result->fetch_all(MYSQLI_ASSOC);
    }
    if(!empty($arr_users)) {
      foreach($arr_users as $row) {?>
        <tr>
          <td>id:<?php echo $row['id']; ?></td>
          <td>name:<?php echo $row['name']; ?></td>
        </tr><br>
        <?php
      }
    }else{
      echo"<h3>can't find user</h3>";
    }
  }
  /*********************Book Search*************************/
  if($_REQUEST['book']!=null){
    $var2 = "%".$_REQUEST['book']."%";
    $sql1="SELECT * FROM book WHERE title Like '$var2'";
    $result1=mysqli_query($conn,$sql1);
    $arr_book = [];
    if ($result1->num_rows > 0) {
        $arr_book = $result1->fetch_all(MYSQLI_ASSOC);
    }
    if(!empty($arr_book)) {
      foreach($arr_book as $row) {?>
        <tr>
          <td>book id:<?php echo $row['bkid']; ?></td>
          <td>name:<?php echo $row['title']; ?></td>
        </tr><br>
        <?php
      }
    }else{
      echo"<h3>can't find user</h3>";
    }
  }
}
else{
  ?><script>
  function uploadCanceled(evt) {
    console.log("Cancelled: " + this.status);
  }
  </script>
<?php }
