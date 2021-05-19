<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style3.css">
    <title>Document</title>
  </head>
  <body>
<?php

    if(isset($_POST['search'])){
      $id = $_POST['empcode'];

      $query = "SELECT * FROM employee_details WHERE empcode='$id'";
      
      $query_run = mysqli_query($conn,$query);
      

      while($row = mysqli_fetch_array($query_run))
      {
        ?>
        <div class="search-section">
          <form class="form-section" action="salary.php" method="POST" autocomplete="off">
        <div class="input-group">
          <input type="text" name="empcode" value="<?php echo $row['empcode'] ?>"/>
          <label for="empcode">EmpCode</label>
        </div>

        <div class="input-group">
        <input type="text" name="empname" value="<?php echo $row['empname'] ?>"/>
          <label for="empname">EmpName</label>
        </div>

        <div class="input-group">
        <input type="text" name="designation" value="<?php echo $row['designation'] ?>"/>
          <label for="designation">Designation</label>
        </div>

        <div class="input-group">
        <input type="text" name="address" value="<?php echo $row['address'] ?>"/>
          <label for="address">Address</label>
        </div>
        
        <div class="submit-section">
          <input type="submit" value="ADD SALARY DETAILS" class="btn" name="search" />
        </div>

      </form>
      </div>
        <?php
      }
    }


  ?>

<div class="head-section">
      <h1>Search Employee</h1>
      <form class="form-section" action="" method="POST" autocomplete="off">
        <div class="input-group">
          <input type="text" name="empcode" id="empcode" required />
          <label for="empcode">EMPCODE</label>
        </div>

        <div class="submit-section">
          <input type="submit" value="SEARCH" class="btn" name="search" />
        </div>

      </form>
    </div>
  </body>
</html>
