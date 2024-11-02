<?php 
//echo "Inside data_save.php";
//echo '<pre>';
//print_r($_POST);

$connnection=mysqli_connect("localhost","root","","5cf_aut_2024");
//mysqli_connect("server_name","user_name","password","database_name");
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$department=$_POST['department'];

//echo $department;
mysqli_query($connnection,"INSERT INTO students (name,mobile,department) values('$name','$mobile','$department')");
?>