<?php
//die("Dta");
include 'db_connection.php';

//echo '<pre>';
//print_r($connection);
//print_r($_POST);
$studentName=$_POST['studentName'];
$roll=$_POST['roll'];
$mobile=$_POST['mobile'];
mysqli_query($connection,"INSERT INTO students (studentName,roll,mobile) values('$studentName','$roll','$mobile')");

//header("location:index.php"); //Redirect to index.php



?>