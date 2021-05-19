<?php

require_once "config.php";

$query = "SELECT empcode,empname FROM  employee_details";
$result = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
</head>
<body>
<div class="button-group">
            <a href="dashboard.php"><button class="btn">GO BACK</button></a>
        </div>
    <div>
        
    <table border="1">
        <thead>
        <tr>
            <th>EMPCODE</th>
            <th>EMPNAME</th>
            <th>DELETE</th>
        </tr>
        </thead>
        
            <?php
                while($row = mysqli_fetch_array($result ))
                {
            ?>
            <tr>
                <td><?php echo $row['empcode'] ?></td>
                <td><?php echo $row['empname'] ?></td>
                <td><a href="delete.php?empcode=<?php echo $row['empcode'];?>"><button class="btn">DELETE</button></a></td>
            </tr>
        <?php
                }     
         ?>
    </table>
    </div>
</body>
</html>