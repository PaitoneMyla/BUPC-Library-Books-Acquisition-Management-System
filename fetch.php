<?php include "includes/dbconn.php"; 

$query = "SELECT * FROM materials;";
$result = mysqli_query($connect, $query);
$output = array();
while($row = mysqli_fetch_assoc($result)){
    $output[] = $row;
}
echo json_encode($output)

?>


