<?php
//die("Dta");
include 'db_connection.php';

//echo '<pre>';
//print_r($connection);
//print_r($_POST);
$name=$_POST['name'];
$department=$_POST['department'];
$mobile=$_POST['mobile'];
mysqli_query($connection,"INSERT INTO students (name,mobile,department) values('$name','$mobile','$department')");
echo "Data has been saved successfully";
//header("location:index_submit.php"); //Redirect to index.php



?>