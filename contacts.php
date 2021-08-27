<?php 

session_start();

if(isset($_SESSION['user_id'])){
  header("location: ");
}
else{
    header("location: index.php");
}    

include "includes/dbconn.php";
    include "nav1.php";
   
    include "archive_query.php";

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
     a:link {
    text-decoration: none;}

    a:visited {
    text-decoration: none;
    }
    a:hover {
    text-decoration: underline;
    }
</style>


<html>
<head>
<meta charset="utf-8">
<title>BLBAMS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bs/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="font/bootstrap-icons.css">
        <link rel="stylesheet" href="css/qp.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="<sha384->                </sha384->mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <script src="jquery-3.5.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="jquery-tabledit-1.2.3/jquery.tabledit.min.js"></script>
        <script src="jquery-tabledit-1.2.3/jquery.tabledit.js"></script>
</head>
<body style="background-attachment: fixed;">


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
        <br>
        <li><a href="logout.php" id="logout"><i class="bi bi-power"></i>Logout</a></li>
    </ul>
</div>


<!--end of sidebar-->

<section>

   
   <div class="container" style="margin-left: 90px; margin-top: 15px; margin-right: 0;">
      <h1 style="color: white; margin-top: 150px; text-align: center; font-family: garamond;">Contact Us</h1>
        <h6 style="color: white; text-align: center; font-family: garamond;">The  Librarian and staff are available to answer your queries and be of service virtually during office hours from 8am to 5pm, M-F.</h6>
      <h6 style="color: white; text-align: center; font-family: garamond;"> BUPC Library can reach via online thru the following: </h6>
      <i class="bi bi-facebook" style="color: lightgray;margin-left: 60px; font-size: 100px;"></i>
        <i class="fab fa-facebook-messenger" style="color: lightgray; font-size: 100px; margin-left: 155px;"></i>
        <i class="fas fa-at" style="color: lightgray; font-size: 85px; margin-left: 178px;"></i>
        <i class="fas fa-comment" style="color: lightgray; font-size: 100px; margin-left: 140px;"></i>
      <h6 style="color: white; margin-left: 33px; font-family: garamond;">Facebook: BUPC Library</h6>
      <h6 style="color: white; font-family: garamond; margin-left: 287px; margin-top: -30px">Messenger: BUPC Library</h6>
      <h6 style="color: white; font-family: garamond; margin-left: 615px; margin-top: -30px">Email</h6>
      <h6 style="color: white; font-family: garamond; margin-left: 850px; margin-top: -29px">SMS</h6>
      <a href="https://web.facebook.com/BUPCLibrary" style="margin-left: 20px; color: white; font-family: garamond;">Facebook.com/BUPCLibrary</a>
      <a href="https://web.facebook.com/messages/t/100719828416769" style="margin-left: 38px; color: white; font-family: garamond;">Facebook.com/messages/BUPCLibrary</a>
        <h6 style="color:white; margin-top: -22px; margin-left: 558px; font-family: garamond;">pc-library@bicol-u.edu.ph</h6>
        <h6 style="color:white; margin-top: -28px; margin-left: 830px; font-family: garamond;">09101005695</h6>
    <br>
    <br>
        <h6 style="color:white; margin-left: 510px; font-family: garamond;">Webform: </h6>
        <a href="http://tinyurl.com/BUPC-LibraryAskRISA" style="margin-left: 410px; margin-bottom: 0px;color: white; font-family: garamond;">http://tinyurl.com/BUPC-LibraryAskRISA</a>
   </div>

    </section>
    
<script>

$(document).ready(function(){
    $("#logout").click(function(){
        alert("Are you sure to log out?").show();
        
    });
    });    
    </script>
    </body>
</html>