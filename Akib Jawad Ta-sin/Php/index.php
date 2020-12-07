<?php
session_start();
require_once './dbcon.php';
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Doctordetails</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>

      </li>

    </ul>
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php?page=User-profile"><i class="fa fa-user"></i>Profile</a>

      </li>
      <li class="nav-item">
        <a type="submit" class="nav-link" href="Logout.php"><i class="fa fa-power-off"></i>Log out</a>
      </li>

    </ul>

  </div>
</nav>


<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
          <div class="list-group">
  <a href="index.php?page=Dashboard" class="list-group-item list-group-item-action active"><i class="fa fa-dashboard"> Dashboard</i>
  </a>
  <a href="index.php?page=DashboardInformation" class="list-group-item list-group-item-action"><i class="fa fa-user-plus"></i>All Health Information</a>
  <a href="index.php?page=DashboardHealth" class="list-group-item list-group-item-action"><i class="fas fa-first-aid"> Add Healthtips</i></a>
<a href="index.php?page=DashboardPackage" class="list-group-item list-group-item-action"><i class="fas fa-archive"> Add packages</i></a>
<a href="index.php?page=DashboardPackageDetails" class="list-group-item list-group-item-action"><i class="fas fa-archive"> All packages</i></a>
</div>

        </div>
        <div class="col-sm-9">
          <div class="content">

<?php


if(isset($_GET['page'])){
  $page = $_GET['page'].'.php';
}else {
  $page = "dashboard.php";
}


if(file_exists($page)){
  require_once $page;
}else {
  echo '<h1>File not found</h1>';
}

 ?>



        </div>
    </div>
</div>
  </body>
</html>
