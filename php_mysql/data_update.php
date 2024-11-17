<?php
//echo "Inside data_save.php";
//echo '<pre>';
//print_r($_POST);
include("db_connect.php");


//mysqli_connect("server_name","user_name","password","database_name");
$id = $_POST['id'];
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$department = $_POST['department'];

//echo $department;
mysqli_query($connnection, "UPDATE students SET name='$name', mobile='$mobile',department='$department' WHERE id='$id'");
header("Location:index.php");
