<?php

include("db_connect.php");
$id = $_GET['id'];
mysqli_query($connnection, "DELETE FROM students WHERE id='$id'");
header("Location:index.php"); // Redirect 
