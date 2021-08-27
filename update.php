<?php
	include('dbconn.php');

$connect = mysqli_connect("localhost", "root", "", "testing");	
  $query = "UPDATE materials SET" . $_POST ["materials_id"]." = '".$_POST["value"]."' WHERE materials_id = '".$_POST["pk"]."'";
mysqli_query($connect, $query);
?>