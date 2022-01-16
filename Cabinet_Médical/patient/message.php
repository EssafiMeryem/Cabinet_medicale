<?php
session_start();
?>
<!doctype html>
<html >
<head>
  <title>Messages</title>
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
  <div class="col-md-12">
  <div class="row">
  <div class="col-md-6">
  <h5 class="text-center my-4">Consultations</h5>
  <?php
  $query="SELECT * FROM consultation WHERE title ='consultation'";
  $res=mysqli_query($connect,$query);
  $output="
    <table class='table  table-bordered'>  
    <tr>
    <th>From</th>  

    <th>To</th> 
    <th>title</th>  
 
    <th>message</th> 
    <th style='width:10%;'>Action</th>
    </tr>
 
    ";
  if (mysqli_num_rows($res) < 1 ) {
    $output .= "    
    <tr><td colspan='5' class='text-center'>No New message</td> </tr>
    ";

  }
  while($row=mysqli_fetch_array($res)){
    $ID=$row['ID'];
    $from=$row['from'];
    $to=$row['to'];
    $title=$row['title'];
    $message=$row['message'];

    $output .="
    <tr>
    <td>$from</td> 
    <td>$to</td> 
    <td>$title</td> 

    <td>$message</td> 

    <td>
    <a href='message.php?ID=$ID'><button ID='$ID' class='btn btn-danger remove'>Supprimer</button></a>
    </td>
    ";

  }
  $output .="
  </tr> 


  </table>
";
    echo $output;
    if(isset($_GET['ID'])){
        $ID=$_GET['ID'];
        $query="DELETE FROM consultation WHERE ID='$ID'";
        mysqli_query($connect,$query);

    }
  ?>

    
     
   


  </div>
  <div class="col-md-6">
  <?php
  if (isset($_POST['add'])){
      $from=$_POST['from'];
      $to=$_POST['to'];
      $title=$_POST['title'];

      $message=$_POST['message'];

      $error=array();
      if (empty($from)){
        $error['u']="Enter Patient Username";
      
      }else if(empty($to)){
        $error['u']="Enter doctor username";
      }else if(empty($title)){
        $error['u']="Enter title";
      }else if(empty($message)){
        $error['u']=" enter your message ";
      
      
         
      }
      if(count($error)==0){
          $q="INSERT INTO consultation(from,to,title,message) VALUES('$from','$to','$title','$message')";
          
      }
         

      }

if(isset($error['u'])){
    $er=$error['u'];
    $show="<h5 class='text-center alert alert-danger'>$er</h5>";

}else{
    $show="";
}
  
  ?>



  <h5 class="text-center my-4">repondre</h5>
  <form method="post" enctype="multipart/form-data">
  <div>
  <?php
  echo $show;
  ?>
  
  </div>
  <div class="from-group">
  <label>from</label>
  <input type="text" name="from" class="form-control" autocomplete="off">

  </div>
  <div class="from-group">
  <label>to</label>
  <input type="text" name="to" class="form-control" >

  </div>
  <div class="from-group">
  <label>title</label>
  <input type="text" name="title" class="form-control" autocomplete="off">

  </div>
  <div class="from-group">
  <label>message</label>
  <input type="text" name="message" class="form-control" >

  </div>
  <br>
  

  
  <input type="submit" name="add" value="Ajouter" class="btn btn-success">
  
  </form>
  


  </div>
  </div>
  
</body>
</html>