<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Doctor Dashboard </title>
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
				include("sidenav.php")
				?>


			</div>
			<div class="col-md-10">
			<h6 class="my-2 text-white">Doctor Dashboard</h6>
				<div class="col-md-12 my-1">
					<div class="row">
						<div class="col-md-3 bg-success mx-2" style="height: 130px;">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-8">
									<?php
									$ad=mysqli_query($connect,"SELECT * FROM multiuserlogin");
									$num=mysqli_num_rows($ad);
									?>
									<h5 class="my-2 text-white texte-center" style="font-size: 30px;"><?php echo $num -2; ?></h5>
									<h5 class="text-white">Total</h5>
									<h5 class="text-white"> Patients</h5>
									</div>
									<div class="col-md-4">
									<a href="patients.php"><i class="fa fa-procedures fa-3x my-4" style="color:white;"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 bg-info mx-2" style="height: 130px;">
						<div class="col-md-12">
								<div class="row">
									<div class="col-md-8">
									<?php
									$app=mysqli_query($connect,"SELECT * FROM appointment");
									$appoint=mysqli_num_rows($app);
									?>
									<h5 class="my-2 text-white texte-center" style="font-size: 30px;"><?php echo $appoint ?></h5>
									<h5 class="text-white">Total</h5>
									<h5 class="text-white"> Rendez-Vous</h5>
									</div>
									<div class="col-md-4">
									<a href="appointment.php"><i class="fa fa-calendar-check fa-3x my-4" style="color:white;"></i></a>
									</div>
								</div>
							</div>		
						</div>
						<div class="col-md-3 bg-warning mx-2" style="height: 130px;">
						<div class="col-md-12">
								<div class="row">
									<div class="col-md-8">
									<?php
									$ad=mysqli_query($connect,"SELECT * FROM multiuserlogin");
									$num=mysqli_num_rows($ad);
									?>
									<h5 class="my-2 text-white texte-center" style="font-size: 30px;"><?php echo $num -2; ?></h5>
									<h5 class="text-white">Total</h5>
									<h5 class="text-white"> Dossiers </h5>
									</div>
									<div class="col-md-4">
									<a href="dossier.php"><i class="fa fa-notes-medical fa-3x my-4" style="color:white;"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 bg-danger mx-2 my-3" style="height: 130px;">
						<div class="col-md-12">
								<div class="row">
									<div class="col-md-8">
									<?php
									$re=mysqli_query($connect,"SELECT * FROM consultation WHERE profile='patient'");
									$rep=mysqli_num_rows($re);
									?>
									<h5 class="my-2 text-white texte-center" style="font-size: 30px;"><?php echo $rep; ?></h5>
									<h5 class="text-white">Total</h5>
									<h5 class="text-white"> Consultations </h5>
									</div>
									<div class="col-md-4">
									<a href="consultation.php"><i class="fa fa-hospital-user fa-3x my-4" style="color:white;"></i></a>
									</div>
								</div>
						</div>
						</div>
						<div class="col-md-3 bg-warning mx-2 my-3 style="height: 130px;">
						<div class="col-md-12">
								<div class="row">
									<div class="col-md-8">
									<?php
									$ord=mysqli_query($connect,"SELECT * FROM ordonnance");
									$ac=mysqli_num_rows($ord);
									?>
									<h5 class="my-2 text-white texte-center" style="font-size: 30px;"><?php echo $ac; ?></h5>
									<h5 class="text-white">Total</h5>
									<h5 class="text-white"> Ordonnances </h5>
									</div>
									<div class="col-md-4">
									<a href="ordonnance.php"><i class="fa fa-prescription-bottle fa-3x my-4" style="color:white;"></i></a>
									</div>
								</div>
						</div>
						</div>
						<div class="col-md-3 bg-success mx-2 my-3" style="height: 130px;">
						<div class="col-md-12">
								<div class="row">
									<div class="col-md-8">
									<?php
									$in=mysqli_query($connect,"SELECT sum(amount_paid) as profit FROM income");
									$row=mysqli_fetch_array($in);
									$inc=$row['profit'];
									?>
									<h5 class="my-2 text-white texte-center" style="font-size: 30px;"><?php echo "$inc DH"; ?></h5>
									<h5 class="text-white">Total</h5>
									<h5 class="text-white"> Profit </h5>
									</div>
									<div class="col-md-4">
									<a href="income.php"><i class="fa fa-coins fa-3x my-4" style="color:white;"></i></a>
									</div>
								</div>
						</div>
						</div>
						<div class="img">
		                    <img src="../img/undraw.svg" WIDTH=950 HEIGHT=300>
		                </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>	
</html>
    