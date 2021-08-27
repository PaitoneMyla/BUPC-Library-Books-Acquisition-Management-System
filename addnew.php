<?php
session_start();

if(isset($_SESSION['user_id'])){
  header("location: ");
}
else{
    header("location: index.php");
}
	include "includes/dbconn.php";

	$accessionno 	= $_POST['accessionno'];
	$copyno 		= $_POST['copyno'];
	$class 			= $_POST['class'];
	$author 		= $_POST['author'];
	$title 			= $_POST['title'];
	$edition 		= $_POST['edition'];
	$vol 			= $_POST['vol'];
	$pg 			= $_POST['pg'];
	$srcfnd 		= $_POST['src_fnd'];
	$price 			= $_POST['price'];
	$publisher		= $_POST['publisher'];
	$year			= $_POST['year'];
    $remarks        = $_POST['remarks'];
    $due            = $_POST['due_date'];
	
	/*$category=$_POST['category'];
*/

	$fileinfo=PATHINFO($_FILES["material_img"]["name"]);

	
	$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
	move_uploaded_file($_FILES["material_img"]["tmp_name"],"img/" . $newFilename);
	$location= $newFilename;
	
	$sql="insert into materials (  accession_no,
								   copy_no,
								   class,
								   author,
								   title,
								   edition,
								   vol,
								   pg,
								   src_fnd,
								   price,
                                   publisher,
								   year,
								   remarks,
                                   material_img,
                                   due_date) 
			values ('$accessionno',
					'$copyno',
					'$class', 
					'$author',
					'$title',
					'$edition',
					'$vol',
					'$pg',
					'$srcfnd',
					'$price',
					'$publisher',
					'$year',
                    '$remarks',
                    '$location',
                    '$due');";
	$conn->query($sql);
    
   
	header('location:records.php');
?>