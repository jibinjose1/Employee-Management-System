<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
  </head>
  <body>
<?php

if(isset($_POST['submit']))
{
  $empcode   = $_POST['empcode'];  
  $basicpay  = $_POST['basicpay'];
  $hra       = $_POST['hra'];
  $pf        = $_POST['pf'];

   $sql2 = "INSERT INTO salary_details VALUES ('$empcode','$basicpay','$hra','$pf')";

        if(mysqli_query($conn,$sql2))
        {
          header("Location:Task.php");
        }
        else{
          echo "Error: Could Not Inserted".mysqli_error($conn);
        }
  }

  ?>


<div class="head-section">
      <h1>Salary Details</h1>
      <form class="form-section" action="" method="POST" autocomplete="off">

      <div class="input-group">
          <input type="text" name="empcode" required/>
          <label for="empcode">EMPCODE</label>
        </div>
        <div class="input-group">
          <input type="text" name="basicpay" id="basicpay" required/>
          <label for="basicpay">BASIC PAY</label>
        </div>

        <div class="input-group">
          <input type="text" name="hra" id="hra" required />
          <label for="hra">HRA</label>
        </div>

        <div class="input-group">
          <input type="text" name="pf" id="pf" required />
          <label for="pf">PF</label>
        </div>

        <div class="submit-section">
          <input type="submit" value="SUBMIT" class="btn" name="submit" />
        </div>
      </form>
    </div>
  </body>
</html>