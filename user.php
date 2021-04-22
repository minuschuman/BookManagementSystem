<?php
  include 'valid.php';
  include 'connect.php';
  require_once("admincheck.php");

  $sql = "SELECT * FROM `users` WHERE `user_level` = 0";
  $result = $conn->query($sql);
 ?>
<!DOCTYPE html>
  <head>
    <title></title>
    <style>
    #menu ul{
      list-style:none;
    }
    </style>
    <link rel="stylesheet" href="style.css" type="text/css">
  </head>
  <body>
    <?php require("menu.php"); ?>
    <div id="adduser">
      <a href="register.php"><button>+ add</button></a>
    </div>
    <div id="dispUser">
      <table>
        <thead>
          <tr>
            <th>S.N.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Active Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
            if (!empty($result)) {
              $i=1;
              foreach ($result as $row) { ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['mail']; ?></td>
                <td><?php echo $row['mobile']; ?></td>
                <td>
                  <?php
                  if ($row['Active_status']==1){
                    echo"Active";
                  }else {
                    echo "Deactive";
                  }
                  ?>
                </td>
                <td id="sup_action">
                  <style>
                  #sup_action a:link {
                      text-decoration: none;
                    }
                  </style>
                  <a href="edituser.php?id=<?php echo $row['id']; ?>">
                    <input id="edit" type="submit" name="edit" value="Edit" class="btn btn-success" />
                  </a>
                  <?php
                  if ($row['Active_status']==1){ ?>
                    <a href="user_deact.php?id=<?php echo $row['id']?>" onclick="return confirm('deactivating')">
                      <input id="deact" type="button" name="Deactive" value="Deactive" class="btn-action" />
                    </a>
                  <?php }else { ?>
                      <a href="user_act.php?id=<?php echo $row['id']?>" onclick="return confirm('activating')">
                        <input id="act" type="button" name="Active" value="Active" class="btn-action" />
                      </a>
                  <?php }
                  ?>
                </td>
              </tr>
            <?php
          $i++; }
          } ?>
        </tbody>
      </table>
    </div>


  </body>
</html>
