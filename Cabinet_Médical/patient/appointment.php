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
  <h5 class="text-center my-2">Book Appointment</h5>
  <?php
  if(isset($_POST['username'])){
  $pat=$POST['username'];
  $sel=mysqli_query($connect,"SELECT * FROM multiuserlogin WHERE username='$pat'");
  $row=mysqli_fetch_array($sel);
  $firstname=$row['firstname'];
  $username=$row['username'];
  $gender=$row['gender'];
  $phone=$row['phone'];
  }
  if(isset($_POST['book'])){
    $date=$_POST['date'];
    $sym=$_POST['sym'];

    if (empty($sym)){

    }else{
        $query="INSERT INTO appointment(firstname, username, gender, phone, appointment_date, symptoms, status, date_booked) VALUES(`firstname`, `username`, `gender`, `phone`, `date`, `sym`, `Pendding`, NOW())";
        $res=mysqli_query($connect,$query);
        if($res){
            echo "<script>alert('You Have Booked an Appointment.')</script>";
        }
    }

}

?>



  <div class="col-md-12">
  <div class="row">
  <div class="col-md-3" ></div>
  <div class="col-md-6 jumbotron">
  <form method="post">
  <label>Appointment Date</label><br>
  <input type="date" name="date" class="form-control"><br>
  <label>Symptoms</label><br>
  <input type="text" name="sym" class="form-control" autocomplete="off" placeholder="Enter Symptoms"><br>
  <input type="submit" name="book" class="btn btn-info my-2" value="Book Appointment">

  </form>
  </div>
  <div class="col-md-3"></div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>