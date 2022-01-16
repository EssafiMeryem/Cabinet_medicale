<!doctype html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="multiuserlogin";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(isset($_POST['Login'])){
$user=$_POST['user'];
$pass = $_POST['pass'];
$query = "SELECT * FROM `multiuserlogin` WHERE username='".$user."' and password = '".$pass."'";
$result = mysqli_query($conn, $query);
if($result){

if($user=="meryem" && $pass=="meryem"){

	
?>
<script type="text/javascript">
window.location.href="doctor/index.php"</script>

<?php

}elseif($user=="ilham" && $pass=="ilham"){

	
	?>
	<script type="text/javascript">
	window.location.href="secretary/index.php"</script>
	<?php
}else {

	
?>
<script type="text/javascript">
window.location.href="patient/index.php"</script>
<?php
 
}
}else{
echo 'no result';
}
}
 
?>


<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form method='POST' action="index.php">
				<img src="img/avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" name="user" class="input" require >
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="pass" class="input" require >
            	   </div>
            	</div>
            	<a href="#"> Forgot Password ?</a>
            	<input type="submit" class="btn" name="Login" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
