<?php
include("valid.php");
include("connect.php");
require_once("admincheck.php");

$sql="SELECT * from users where user_level='0' and id='".$_GET['id']." '";
$result=$conn->query($sql)->fetch_assoc();

?>
<form method="POST" action="useredited.php?id=<?php echo $_GET['id'];?>">
  <div id="page-wrapper">
    <div class="container-fluid">
      <h2> Edit User</h2>
      <div class="form-group">
        <label>Name</label><br>
        <input class="form-control" name="name" value="<?php echo $result['name']?>" required>
      </div>
      <div class="col-lg-6">
        <label>User Name</label><br>
        <input class="form-control" name="username" value="<?php echo $result['username']?>" required>
      </div>
      <div class="user-group">
        <label for="user_level">Select User Role</label><br>
        <select name="user_level" required class="form-control">
          <option value="0"  "selected">user</option>"
          <option value="1"  "selected">admin</option>"
        </select>
      </div><!--user_group-->
    </div>
    <label>Status</label>
    <div class="radio">
      <label>
        <input type="radio" name="status" value="1" <?php if($result['Active_status']=='1'){echo "checked";}?>>Active
      </label>
      <label>
        <input type="radio" name="status" value="0" <?php if($result['Active_status']=='0'){echo "checked";}?>>Deactive
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-success" name="btn"> Submit</button>
</form>
