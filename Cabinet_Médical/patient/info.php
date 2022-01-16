<?php
session_start();
?>
<!doctype html>
<html >
<head>
  <title>Plus d'infos</title>
</head>
<body>
  <?php
  include("../include/header.php");
  include("../include/connection.php");

  ?>
  <div class="container-fluid">
  <div class="col-md-12">
  <div class="row">
  <div class="col-md-2" style="margin-left: -30px;">
  <?php
  include("sidenav.php");
  ?>
  </div>
  <div class="col-md-10">
  <h5 class="my-2 text-white">Plus d'infos</h5>
  
  
  <?php
                                    $result=mysqli_query($connect,"SELECT * FROM info ");
                                    $row = mysqli_fetch_assoc($result);
									?>
  


  <div class="col-md-12">
  <div class="row">
  <div class="col-md-3" ></div>
  <div class="col-md-6 jumbotron">
  <form method="post">
  
  <h4 class="text-center my-2">Plus d'infos </h4>
  <div class="text-center">
  <i class="fa fa-hand-point-down fa-3x my-4" style="color:#17a2b8;"></i><br><br>
  <label><mark>Nom de l hopital:</mark></label><br>
  <label><?php echo $row['hopital']  ?></label><br> 
   <label><mark>Telephone:</mark></label><br>
   <label><?php echo $row['telephone']  ?></label><br>
   <label><mark>Lieu:</mark></label><br>
   <label><?php echo $row['lieu']  ?></label><br>
   <label><mark>Specialites:</mark></label><br>
   <label><?php echo $row['specialites']  ?></label><br>
   <div>

  </form>
  </div>
  <div class="col-md-3"></div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>