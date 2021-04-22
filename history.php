<?php
include 'valid.php';
include 'connect.php';
require_once("admincheck.php");
?>
<?php 
include 'connect.php';
$sql="SELECT bo.title as title, u.name as name,b.borrow_date as bdate , b.return_date as rdate,b.brid as brid, b.Issued_by as iss ,b.return_status as return_status FROM book as bo natural join borrow as b natural join users as u  ORDER BY brid DESC";
$result=$conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History | BMS</title>
</head>
<body>
<?php require("menu.php"); ?>
    <table>
        <thead>
            <tr>
                <th>SN</th>
                <th>Name</th>
                <th>Book's Name</th>
                <th>Borrow Date</th>
                <th>Return Date</th>
                <th>Issued by</th>
                <th>status</th>
                
            </tr>
        </thead>
        <tbody>
        <?php
        $i=0;
        if (!empty($result)) {
            foreach ($result as $row) { 
                $i++;
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['bdate']; ?></td>
                    <td><?php echo $row['rdate']; ?></td>
                    <td><?php echo $row['iss']; ?></td>
                    <td>
                        <?php
                            if($row['return_status']==0){?>
                                <a href="returned.php?id=<?php echo $row['brid']?>"><input type="button" onclick="return confirm('set book returned?')"value="Not Returned"></a>
                            <?php
                            }
                            else {
                                echo"returned";
                            }
                        ?>
                    </td>
                </tr>
            <?php }
        } ?>
        </tbody>
    </table>
</body>
</html>