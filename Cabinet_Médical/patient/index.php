<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Patient Dashboard </title>
</head>
<body>
<?php
include("../include/header.php");
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
			<h6 class="my-2 text-white">Patient Dashboard</h6>



				<div class="col-md-12 my-1">
					<div class="row">

						<div class="col-md-3 bg-success mx-2" style="height: 130px;">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-8">
									<h5 class="my-4 text-white texte-center" style="font-size: 30px;">Consultation</h5>
									
									</div>
									<div class="col-md-4">
									<a href="message.php"><i class="fa fa-envelope fa-3x my-4" style="color:white;"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-3 bg-info mx-2" style="height: 130px;">
						<div class="col-md-12">
								<div class="row">
									<div class="col-md-8">
									<h5 class="my-4 text-white texte-center" style="font-size: 30px;">Rappels</h5>
									
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
									<h5 class="my-4 text-white texte-center" style="font-size: 30px;">Ordonnance</h5>
									
									</div>
									<div class="col-md-4">
									<a href="ordonnance.php"><i class="fa fa-file-signature fa-3x my-4" style="color:white;"></i></a>
									</div>
								</div>
							</div>
						</div>
                        <div class="col-md-3 bg-danger mx-2 my-3" style="height: 130px;">
						<div class="col-md-12">
								<div class="row">
									<div class="col-md-8">
									<h5 class="my-4 text-white texte-center" style="font-size: 30px;">Urgence</h5>
									
									</div>
									<div class="col-md-4">
									<a href="urgence.php"><i class="fa fa-ambulance fa-3x my-4" style="color:white;"></i></a>
									</div>
								</div>
						</div>
						</div>
                        <div class="col-md-3 bg-warning mx-2 my-3" style="height: 130px;">
						<div class="col-md-12">
								<div class="row">
									<div class="col-md-8">
									<h5 class="my-4 text-white texte-center" style="font-size: 30px;">Facture</h5>
									
									</div>
									<div class="col-md-4">
									<a href="facture.php"><i class="fa fa-file-invoice-dollar fa-3x my-4" style="color:white;"></i></a>
									</div>
								</div>
						</div>
						</div>
                        
                        <div class="col-md-3 bg-success mx-2 my-3" style="height: 130px;">
						<div class="col-md-12">
								<div class="row">
									<div class="col-md-8">
									<h5 class="my-4 text-white texte-center" style="font-size: 30px;">Plus d'Info</h5>
									
									</div>
									<div class="col-md-4">
									<a href="info.php"><i class="fa fa-clinic-medical fa-3x my-4" style="color:white;"></i></a>
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