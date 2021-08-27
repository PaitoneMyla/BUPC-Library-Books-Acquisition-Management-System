<?php 

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "capstone";

$conn = mysqli_connect($servername,$dbusername,$dbpassword,$dbname);

if(!$conn){
die ("Maintenance Mode " . mysqli_connect_error());
 }
 ?>
