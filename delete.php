<?php

require_once "config.php";

$id = $_GET['empcode'];

$del ="DELETE FROM employee_details WHERE empcode='$id'";

if(mysqli_query($conn,$del)){
    header("Location:employee.php");
}
else{
    echo "Could not Delete";
}

?>