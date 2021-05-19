<?php
require_once "config.php";
$query = "SELECT empname FROM  employee_details";
$result = mysqli_query($conn,$query);
?>
<?php
if(isset($_POST['send']))
{
    if(!empty($_POST['check_box'])){
        {
            header("Location:send.php");
        }
    }
    else{
        echo "Error";
    }
    
}
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
    <div>
    <div class="button-group">
        <a href="dashboard.php"><button class="btn">GO BACK</button></a>
    </div>
    
        <table border="1">
        <thead>
        <tr>
            <th>EMPNAME</th>
            <th>CHECKBOX</th>  
            <th>MAIL</th>
        </tr>
        </thead>
        
            <?php
                while($row = mysqli_fetch_array($result ))
                {
            ?>
            <tr>
                <td><?php echo $row['empname'] ?></td>
                <form method="POST">
                <td><input type="checkbox" name="check_box[]" required></td>
                <td><input type="submit" name="send" class="btn" value="SEND MAIL"/>
                </form>
            </tr>
        
        <?php
                }     
         ?>
        </table>
     </div>

        
</body>
</html>