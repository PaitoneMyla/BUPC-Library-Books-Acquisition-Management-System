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

?>

<style>
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
</style>
  
<html>
<head> <title>Home</title>
        <link rel="stylesheet" href="bs/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="font/bootstrap-icons.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="<sha384->                </sha384->mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
 </head>
  
    <body>
    
    
<!--sidebar-->
<input type="checkbox" id="check">
<label for="check">
    <i class="fas fa-bars" id="btn"></i>
    <i class="fas fa-times" id="cancel"></i>
</label>
<div class="sidebar">
    <header style="color: black; font-family: garamond;">BLAMS</header>
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

    
<section> 
     <img src="img/BU-torch.png" style=" height: 500px; width: 250px; margin-top: 70px;margin-left: 120px; position: static;" alt="">
     <div class="container" style=" margin-top: -470px; margin-left: 320px; height: 350px; width: 910px; position: fixed;">
   <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/carousel/1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/carousel/2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/carousel/5.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/carousel/6.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
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


 