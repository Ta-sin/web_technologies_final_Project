<?php

if (!isset($_SESSION['user_login'])){
  header('location: login.php');
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="CSS\Dashboard.css">
    <link rel="stylesheet" href="CSS\bootstrap.min.css">
    <link rel="stylesheet" href="CSS\dataTables.bootstrap4.min.css">


<script src="https://kit.fontawesome.com/6334209b72.js" crossorigin="anonymous"></script>

<script type="text/javascript" src="js\jquery-3.5.1.js"></script>
<script type="text/javascript" src="js\jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js\dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="js\Script.js"></script>
  </head>
  <body>
    <div class="content">


    <h1 class="text-primary"><i class="fa fa-dashboard"></i> Profile's <small style="color:gray;"> Statistics Overview</small></h1>
    <ol class="breadcrumb">
      <li class="active"><i class="fa fa-dashboard"></i>Dashboard</li>
    </ol>

<?php
$count_tips = mysqli_query($link, "SELECT * FROM `health-tips`");
$total_tips = mysqli_num_rows($count_tips);

$count_package = mysqli_query($link, "SELECT * FROM `package-details`");
$total_package = mysqli_num_rows($count_package);

 ?>




    <div class="row">
       <div class="col-lg-4">
      <div class="card text-white bg-success">
      <i class="fa fa-users fa-3x"></i>
      <div class="card-body">
      <h5 class="card-title"><?= $total_tips;?></h5>
      <p class="card-text">All Healthtips</p>
      <a href="index.php?page=DashboardInformation" class="btn btn-primary">See Details</a>
      </div>
  </div>
  </div>
       <div class="col-lg-4" >
      <div class="card text-white bg-success">
      <i class="fa fa-users fa-3x"></i>
      <div class="card-body">
      <h5 class="card-title"><?= $total_package;?></h5>
      <p class="card-text">All packages</p>
      <a href="index.php?page=DashboardPackageDetails" class="btn btn-primary">See Details</a>
      </div>
  </div>
       </div>
    </div>
    <br>
    <br>
  <hr>




  </div>
  </body>
</html>
