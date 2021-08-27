<?php 
session_start();

if(isset($_SESSION['user_id'])){
  header("location: ");
}
else{
    header("location: index.php");
}
    include "includes/dbconn.php";
    include "nav.php";
    //include "sidebar.php";
    require 'archive_query.php';
 $query = "SELECT * FROM archive ORDER BY archive_id DESC;";
?>

<style>
	.sidebar{
		top: 0;
	}
  .sidebar ul {
    font-family: garamond;
  }
  .sidebar ul li ul{
    position: absolute;
    margin-left: 200px;
    top: 0;
    display: none;
    font-size: 10px;
    background-color: lightgray;
  }
  .sidebar ul li 
  {
    position: relative;
    text-align: center;
  }
  .sidebar ul li:hover ul{
    display: block;
  }
  .table-responsive{
    max-height: 20em;
}
.table{
    background:rgb(191, 191, 191);
    margin bottom: 100px;
}
.table th{
    position: sticky;
    top: 0;
    background-color: lightgray;
    z-index: 5;
}
.table th:nth-child(1){
    top: 0;
    background-color: lightgray;
    z-index: 6;
}
tbody td:nth-child(1){
    top: 0;
    background-color: lightgray;
    z-index: 3;
  }
</style>


<html>
<head>
<meta charset="utf-8">
<title>BLBAMS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bs/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="font/bootstrap-icons.css">
        <link rel="stylesheet" href="css/archive.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="<sha384->                </sha384->mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <script src="jquery-3.5.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="jquery-tabledit-1.2.3/jquery.tabledit.min.js"></script>
        <script src="jquery-tabledit-1.2.3/jquery.tabledit.js"></script>
</head>
<body style="color: black;    background: linear-gradient(to left, #0066ff 8%, #ff6600 100%);">


<!--sidebar-->
<input type="checkbox" id="check">
<label for="check">
    <i class="fas fa-bars" id="btn"></i>
    <i class="fas fa-times" id="cancel"></i>
</label>
<div class="sidebar"> 
    <header style="color: black; font-family: garamond">BLAMS</header>
    <ul>
        <li><a href="home.php"><i class ="bi bi-house-door-fill"></i>Home</a></li>
        <li><a href="records.php"><i class ="fa fa-book"></i>Records</a></li>
        <li><a href="archive.php"><i class ="fa fa-archive"></i>Archive</a></li>
        <li><a href="contacts.php"><i class="bi bi-telephone-fill"></i>Contacts</a></li>
        <li><a href="#"><i class="bi bi-info-circle-fill"></i>About</a>
          <ul>
          <li><a class="dropdown-item" href="vmission.php" style="font-size: 15px;">Vision Mission</a></li>
          <li><a class="dropdown-item" href="qp.php" style="font-size: 15px;">Quality Policy</a></li>
          <li><a class="dropdown-item" href="about.php" style="font-size: 15px;"></i>Organizational Chart</a></li>
          </ul>
        </li>
        <br>
        <br>
        <br>
        <br>
        <li><a href="logout.php" id="logout"><i class="bi bi-power"></i>Logout</a></li>
    </ul>
</div>


<!--end of sidebar-->

<h1 style="color: white; margin-top: 30px; font-family: Monaco; text-align: center;">Archive</h1>


<div class="container-fluid">
    
<!-- Searchbar -->   
       <div class="row">
        <div class="">
     
            
              <form action="archive.php" method="POST">
              
               <div class="input-group" style="margin-left: 5px; margin-top: 5px;">
                <input id="searchbar" name="search" type="text" class="form-control btn-outline-primary" placeholder="search" style=" position: absolute; margin-left: 450px; height: 40px; width: 500px; margin-top: 30px;">
                <button name="submit" class="btn bn-outline-secondary"><i class="bi bi-search" style=" position: absolute; margin-left: 950px; margin-top: 30px;"></i></button>
                </div>
            </form>
        </div>
    </div>

<!-- end of Searchbar -->



	
	
<div class="container" >

	
	<div class ="row" style="margin-top: 100px;">
   
   </div>
	<div class="table-responsive" >
	
		<table id = "editable_table" class="table table-striped table-hover">
			<thead>
				<th>Accession Number</th>
				<th>Copy Number</th>
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
                <th>Date Received</th>
		        <th>Date transferred</th>
				
			</thead>
			
			<tbody>
				<?php
                    if(isset($_POST['search'])){
                        $searchkey = $_POST['search'];
					$sql="SELECT * from archive WHERE accession_no LIKE '%$searchkey%';";
                        }else{
                        $sql = "SELECT * FROM archive;";
					
                    }
                    $query=$conn->query($sql);
					while($fetch = mysqli_fetch_array($query)){
						?>
						<tr>
							<td class="text-center"><?php echo $fetch['accession_no']; ?></td>
							<td class="text-center"><?php echo $fetch['copy_no']; ?></td>
							<td class="text-center"><?php echo $fetch['class']; ?></td>
							<td class="text-center"><?php echo $fetch['author']; ?></td>
							<td class="text-center"><?php echo $fetch['title']; ?></td>
							<td class="text-center"><?php echo $fetch['edition']; ?></td>
							<td class="text-center"><?php echo $fetch['vol']; ?></td>
							<td class="text-center"><?php echo $fetch['pg']; ?></td>
							<td class="text-center"><?php echo $fetch['src_fnd']; ?></td>
							<td class="text-center"><?php echo $fetch['price']; ?></td>
							<td class="text-center"><?php echo $fetch['publisher']; ?></td>
							<td class="text-center"><?php echo $fetch['year']; ?></td>
							<td class="text-center"><?php echo $fetch['remarks']; ?></td>
							<td class="text-center">
							<a href="<?php echo $row['material_img'];?>"><img src="img/<?php echo $fetch['material_img']; ?>" height="100px" width="100px"></a></td>
						    <td class="text-center"><?php echo date('Y, M, d', strtotime($fetch['date_received'])) ?></td>
						    <td class="text-center"><?php echo $fetch['date_transferred']; ?></td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</div>

<script src="bs/js/bootstrap.min.js"></script>	


      </div>

</body>
</html>

