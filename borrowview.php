<?php
    include 'connect.php';
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>| BMS</title>
</head>
<body>
    <?php 
        require("menu.php");
        $sql= "SELECT bo.title as title, u.name as name,b.borrow_date as bdate , b.return_date as rdate,b.brid as brid, b.Issued_by as iss, b.return_status as return_status  FROM book bo natural join borrow b natural join users u where u.name = '$name' ORDER BY rdate ASC";// ";
        $result=$conn->query($sql);
    ?>
    <table>
        <thead>
            <tr>
                <th>SN</th>
                <!-- <th>Name</th> -->
                <th>Book's Name</th>
                <th>Borrow Date</th>
                <th>Return Date</th>
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
                    <td><?php echo $i ; ?></td>
                    <!-- <td><?php echo $row['name']; ?></td> -->
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['bdate']; ?></td>
                    <td><?php echo $row['rdate']; ?></td>
                    <td>
                        <?php
                        if($row['return_status']==0){
                            echo "Not Returned";
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