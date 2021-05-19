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
       $empcode     = $_POST['empcode'];
       $empname     = $_POST['empname'];
       $designation = $_POST['designation'];
       $address     = $_POST['address'];

          $sql = "INSERT INTO employee_details VALUES ('$empcode','$empname','$designation','$address')";

          if(mysqli_query($conn,$sql)){
            header("location:form.php");
          }   
          else{
            echo "Error:Could Not Inserted".mysqli_error($conn);
          }
    }
?>

 <div class="head-section">
      <h1>Register Here</h1>
      <form class="form-section" action="" method="POST" autocomplete="off">
        <div class="input-group">
          <input type="text" name="empcode" id="empcode" required />
          <label for="empcode">EmpCode</label>
        </div>

        <div class="input-group">
          <input type="text" name="empname" id="empname" required/>
          <label for="empname">EmpName</label>
        </div>

        <div class="input-group">
          <input type="text" name="designation" id="designation" required />
          <label for="designation">Designation</label>
        </div>

        <div class="input-group">
          <input type="text" name="address" id="address" required />
          <label for="address">Address</label>
        </div>

        <div class="submit-section">
          <input type="submit" value="REGISTER" class="btn" name="submit" />
        </div>
      </form>
    </div>
  </body>
</html>
