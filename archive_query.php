<?php
 
	require_once 'includes/dbconn.php';
 
	$sql = "SELECT * FROM `materials`";

    $query=$conn->query($sql);
	$Date = date('Y-m-d');

	while($fetch = mysqli_fetch_array($query)){
        $sql1= "INSERT INTO `archive` (materials_id,
                                        accession_no,
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
                                        date_received,
                                        date_transferred) 
                                VALUES ('$fetch[materials_id]', 
                                '$fetch[accession_no]', 
                                '$fetch[copy_no]', 
                                '$fetch[class]', 
                                '$fetch[author]', 
                                '$fetch[title]', 
                                '$fetch[edition]', 
                                '$fetch[vol]', 
                                '$fetch[pg]',
                                '$fetch[src_fnd]', 
                                '$fetch[price]', 
                                '$fetch[publisher]', 
                                '$fetch[year]', 
                                '$fetch[remarks]', 
                                '$fetch[material_img]', 
                                '$fetch[date_received]',
                                '$fetch[due_date]');";
$sql2="DELETE FROM `materials` WHERE `materials_id` = '$fetch[materials_id]'";
		
          if($fetch['due_date'] == $Date){
              
              
             $conn->query($sql1);   
                
			
            $conn->query($sql2); 

			
         }
	}
?>