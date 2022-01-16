<?php
session_start();
?>
<!doctype html>
<html >
<head>
  <title>Patients</title>
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
  <h5 class="text-center my-4">Liste des Consultations</h5>
  <?php
  $query="SELECT * FROM consultation where profile='patient'";
  $res=mysqli_query($connect,$query);
  $output="";
  $output="
    <table class='table  table-bordered'>  
    <tr>
    <td>ID</td> 
    <td>Title</td>
    <td>Message</td>
    <td>Username</td>
    <td>Date_Send_message</td>
    </tr>
 
    ";
    if (mysqli_num_rows($res) < 1 ) {
        $output .= "    
        <tr><td colspan='6' class='text-center'>No Message Yet</td> </tr>
        ";
    
      }
      while($row=mysqli_fetch_array($res)){
        
        $output .="
        <tr>
        <td>".$row['ID']."</td> 
        <td>".$row['title']."</td> 
        <td>".$row['message']."</td> 
        <td>".$row['username']."</td> 
        <td>".$row['date_send']."</td> 
        
        
        
        ";
    
      }
      $output .="
  </tr> 


  </table>
";
echo $output;


?>