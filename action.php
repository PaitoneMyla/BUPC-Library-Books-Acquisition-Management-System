<?php include("includes/dbconn.php"); 

$input = filter_input_array(INPUT_POST);


$copy_no            = mysqli_real_escape_string($conn, $input["copy_no"]);
$class              = mysqli_real_escape_string($conn, $input["class"]);
$author             = mysqli_real_escape_string($conn, $input["author"]);
$title              = mysqli_real_escape_string($conn, $input["title"]);
$edition            = mysqli_real_escape_string($conn, $input["edition"]);
$vol                = mysqli_real_escape_string($conn, $input["vol"]);
$pg                 = mysqli_real_escape_string($conn, $input["pg"]);
$src_fnd            = mysqli_real_escape_string($conn, $input["src_fnd"]);
$price              = mysqli_real_escape_string($conn, $input["price"]);
$publisher          = mysqli_real_escape_string($conn, $input["publisher"]);
$year               = mysqli_real_escape_string($conn, $input["year"]);
$remarks            = mysqli_real_escape_string($conn, $input["remarks"]);


if($input["action"] == 'edit'){
    $query = "UPDATE materials 
                SET 
                    copy_no         =   '".$copy_no."', 
                    class           =   '".$class."',
                    author          =   '".$author."',
                    title           =   '".$title."',
                    edition         =   '".$edition."',
                    vol             =   '".$vol."',
                    pg              =   '".$pg."',
                    src_fnd         =   '".$src_fnd."',
                    price           =   '".$price."',
                    publisher       =   '".$publisher."',
                    year            =   '".$year."',
                    remarks         =   '".$remarks."'
                WHERE accession_no  =   '".$input["accession_no"]."'";
    mysqli_query($conn, $query);
}

echo json_encode($input);
?>