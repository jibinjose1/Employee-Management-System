<?php
require_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style5.css" />
    <title>admin</title>
  </head>
  <body>

  <?php

  if(isset($_POST['submit']))
  {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT username,password FROM admin";
    $query = mysqli_query($conn,$sql);

     $row = mysqli_fetch_array($query);
     {
      if($row['username']==$username  && $row['password']==$password)
       {
         header("Location:dashboard.php");
       }
       else{
       echo "YOU ARE NOT ADMIN";
       }
      }
  }

  ?>
    <div class="box">
      <h1>ADMIN LOGIN</h1>
      <form action="" autocomplete="off" method="POST">
        <div class="input-group">
          <input type="text" name="username" id="username" required/>
          <label for="username">USERNAME</label>
        </div>

        <div class="input-group">
          <input type="password" name="password" id="password" required />
          <label for="password">PASSWORD</label>
        </div>

        <div class="submit-section">
          <input type="submit" value="LOGIN" class="btn" name="submit" />
        </div>
      </form>
    </div>
  </body>
</html>
