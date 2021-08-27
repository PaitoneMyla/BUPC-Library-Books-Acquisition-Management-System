<?php 
session_start();

if(isset($_SESSION['user_id'])){
  header("location: ");
}
else{
    header("location: index.php");
}
    include "includes/dbconn.php";    
?>

<html>
<head>
<meta charset="utf-8">
<title>BLBAMS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bs/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/print.css" media="print">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="<sha384->                </sha384->mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <script src="jquery-3.5.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="jquery-tabledit-1.2.3/jquery.tabledit.min.js"></script>
        <script src="jquery-tabledit-1.2.3/jquery.tabledit.js"></script>
</head>

 <body>
    
    <div class="text-center">
        <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
      </div>
    <a href="records.php" id="back">Back</a>
     
     <table id = "editable_table" class="table table-striped table-hover" style="background:rgb(191, 191, 191);">
			<thead>
				<th>Accession Number</th>
				<th>Copy Number</th>
				<th>Date Received</th>
				<th>Class</th>
				<th>Author</th>
				<th>Title</th>
				<th>Edition</th>
				<th>Volume</th>
				<th>Page</th>
				<th>Sources of Fund</th>
				<th>Price</th>
				<th>Publisher</th>
				<th>Year</th>
				<th>Remarks</th>
				<th>Image</th>
		
				
			</thead>
			
			<tbody>
				<?php

                    $sql = "SELECT * FROM materials;";
			
                  
                    $query=$conn->query($sql);
					while($row=$query->fetch_array()){
						?>
						<tr>
							<td class="text-center"><?php echo $row['accession_no']; ?></td>
							<td class="text-center"><?php echo $row['copy_no']; ?></td>
							<td class="text-center"><?php echo date('M d, Y ', strtotime($row['date_received'])) ?></td>
							<td class="text-center"><?php echo $row['class']; ?></td>
							<td class="text-center"><?php echo $row['author']; ?></td>
							<td class="text-center"><?php echo $row['title']; ?></td>
							<td class="text-center"><?php echo $row['edition']; ?></td>
							<td class="text-center"><?php echo $row['vol']; ?></td>
							<td class="text-center"><?php echo $row['pg']; ?></td>
							<td class="text-center"><?php echo $row['src_fnd']; ?></td>
							<td class="text-center"><?php echo $row['price']; ?></td>
							<td class="text-center"><?php echo $row['publisher']; ?></td>
							<td class="text-center"><?php echo $row['year']; ?></td>
							<td class="text-center"><?php echo $row['remarks']; ?></td>
							<td class="text-center">
							<a href="<?php echo $row['material_img'];?>"><img src="img/<?php echo $row['material_img']; ?>" height="100px" width="100px"></a></td>
						
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
		
		    
 </body>