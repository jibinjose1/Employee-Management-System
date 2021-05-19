<?php

require_once "config.php";

$query = "SELECT employee_details.empcode,employee_details.empname,employee_details.designation,employee_details.address,salary_details.basicpay,salary_details.hra,salary_details.pf FROM  employee_details LEFT JOIN salary_details ON employee_details.empcode = salary_details.empcode";
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
        <a href="main.html"><button class="btn">GO BACK</button></a>
    </div>
    <table border="1">
        <thead>
        <tr>
            <th>EmpCode</th>
            <th>EmpName</th>
            <th>Designation</th>
            <th>Address</th>
            <th>BasicPay</th>
            <th>HRA</th>
            <th>PF</th>
        </tr>
        </thead>
        
            <?php
                while($row = mysqli_fetch_array($result))
                {
            ?>
            <tr>
                <td><?php echo $row['empcode'] ?></td>
                <td><?php echo $row['empname'] ?></td>
                <td><?php echo $row['designation'] ?></td>
                <td><?php echo $row['address'] ?></td>
                <td><?php echo $row['basicpay'] ?></td>
                <td><?php echo $row['hra'] ?></td>
                <td><?php echo $row['pf'] ?></td>
            </tr>
        <?php
                }     
         ?>
    </table>
</body>
</html>