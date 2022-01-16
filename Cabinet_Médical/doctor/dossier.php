<?php
session_start();
?>
<!doctype html>
<html >
<head>
  <title>Dossiers Medicaux</title>
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
  <h5 class="text-center my-4">Liste des Dossiers Medicaux</h5>
  <?php
  $query="SELECT * FROM multiuserlogin WHERE profile ='patient'";
  $res=mysqli_query($connect,$query);
  $output="
    <table class='table  table-bordered'>  
    <tr>
    <th>ID</th> 
    <th>Nom d'utilisateur</th> 
    <th>Dossier Medical</th> 

    <th style='width:10%;'>Action</th>
    </tr>
 
    ";
  if (mysqli_num_rows($res) < 1 ) {
    $output .= "    
    <tr><td colspan='4' class='text-center'>No New Dossiers </td> </tr>
    ";

  }
  while($row=mysqli_fetch_array($res)){
    $ID=$row['ID'];
    $username=$row['username'];
    $dossier_medical=$row['dossier_medical'];
    $output .="
    <tr>
    <td>$ID</td> 
    <td>$username</td>
    <td>$dossier_medical</td>
    
    <td>
    <a href='dossier.php?ID=$ID'><button ID='$ID' class='btn btn-danger remove'>Supprimer</button></a>
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
        $query="DELETE FROM multiuserlogin WHERE ID='$ID'";
        mysqli_query($connect,$query);

    }
  ?>

    
     
   


  </div>
  <div class="col-md-6">
  <?php
  if (isset($_POST['add'])){
      $uname=$_POST['uname'];
      $dossier_medical=$_POST['dossier_medical'];
      $phone=$_POST['phone'];
      $gender=$_POST['gender'];
      $age=$_POST['age'];
      $date_birth=$_POST['date_birth'];
      $image=$_FILES['img']['name'];



      $error=array();
      if (empty($uname)){
        $error['u']="Enter Patient Username";
      }else if(empty($dossier_medical)){
        $error['u']="Enter Patient dossier_medical";
    }else if(empty($phone)){
        $error['u']="Enter Patient phone";
    }else if(empty($gender)){
        $error['u']="Enter Patient gender";
    }else if(empty($age)){
        $error['u']="Enter Patient age";
    }else if(empty($date_birth)){
        $error['u']="Enter Patient date of birth";
    }else if(empty($image)){
        $error['u']=" Add Patient Picture ";
         
      }
      
        
         
      
      if(count($error)==0){
          $q="INSERT INTO multiuserlogin(username,dossier_medical,phone,gender,date_birth,age,image) VALUES('$uname','$dossier_medical','$phone','$gender','$date_birth','$age','$image')";
          $result=mysqli_query($connect,$q);
          if ($result){
            move_uploaded_file($_FILES['img']['tmp_name'],"img\$image");
      }else{

      }
  }
     

  }
if(isset($error['u'])){
    $er=$error['u'];
    $show="<h5 class='text-center alert alert-danger'>$er</h5>";

}else{
    $show="";
}
  
  ?>



  <h5 class="text-center my-4">Ajouter un Dossier Medical</h5>
  <form method="post" enctype="multipart/form-data">
  <div>
  <?php
  echo $show;
  ?>
  
  </div>
  <div class="from-group">
  <label>Nom d'utilisateur</label>
  <input type="text" name="uname" class="form-control" autocomplete="off">

  </div>
  <div class="from-group">
  <label>Dossier Medical</label>
  <input type="text" name="dossier_medical" class="form-control" >

  </div>
  <div class="from-group">
  <label>Phone</label>
  <input type="text" name="phone" class="form-control" autocomplete="off">

  </div>
  <div class="from-group">
  <label>Gender</label>
  <input type="text" name="gender" class="form-control" autocomplete="off">

  </div>
  <div class="from-group">
  <label>Date of Birth</label>
  <input type="text" name="date_birth" class="form-control" autocomplete="off">

  </div>
  <div class="from-group">
  <label>age</label>
  <input type="text" name="age" class="form-control" autocomplete="off">

  </div>

  <div class="from-group">
  <label>Photo de Patient</label>
  <input type="file" name="img" class="form-control" >
  </div>
  <br>
  <input type="submit" name="add" value="Ajouter" class="btn btn-success">
  </div>
                        
  </form>
  


  </div>
  </div>
  
</body>
</html>