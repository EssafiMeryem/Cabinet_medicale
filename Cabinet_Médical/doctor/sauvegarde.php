<?php
  session_start();
  ?>
  <!doctype html>
<html >
<head>
  <title>Profit</title>
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
  <h2 class="my-2 text-white">Sauvegarde Database </h2>

  <div class="col-md-12">
  <div class="row">
  <div class="col-md-3" ></div>
  <div class="col-md-6 jumbotron">
  
  <label ><h5>Import Database</h5></label><br>
  <div>
  <a href="backup.php"><button class="btn btn-info my-2" style="width:40%"><i class="fa fa-download"></i> Download</button></a>
  </div><br>
  <label><h5>Export Database</h5></label><br>
  <div>
  <a href="restore.php"><button class="btn btn-info my-2" style="width:40%"><i class="fa fa-upload"></i> Upload</button></a>
  </div>

                       
                        <div class="img ">
		                    <img style="float: right; margin: 0px 0px 0px 400px;" src="../img/restore.svg"  WIDTH=300 HEIGHT=200  >
		                </div>

  
  </div>
  <div class="col-md-3"></div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>