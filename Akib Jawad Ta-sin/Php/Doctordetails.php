<?php
session_start();

if (!isset($_SESSION['user_login'])){
  header('location: login.php');
}
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Details</title>
    <link rel="stylesheet" href="CSS\Doctordetails.css">
    <link rel="stylesheet" href="CSS\bootstrap.min.css">
  </head>
  <body>
    <form  action="" method="POST">
    <div class="Container-fluid">
      <div class="row">

      <div class="col-lg-1 col-md-1 col-sm-2 m-0">
        <img src="Images\user.png" alt="Icon" style="width:46px;height:47px;">
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12 m-0">
        <h1> </h1>
      </div>
  </div>
</div>
<div class="Container-fluid">
<div class="row">
  <div class="col-lg-5 col-md-5 col-sm-12 m-0 b">
    <label for="name" ><b>Full name</b></label>
    <br>
    <input type="text" placeholder="Enter your full name" name="email" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" >
    <br>
    <label for="number"><b>Contact No</b></label>
    <br>
    <input type="number" placeholder="Enter your contact no" name="number" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
    <br>
    <label for="address"><b>Address</b></label>
    <br>
    <input type="address" placeholder="Enter your address" name="Address" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">

    <br>
    <label for="Institute"><b>Institute</b></label>
    <br>
    <input type="text" placeholder="Where you work" name="Institute" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" >

    <br>
    <label for="number"><b>BMDC Reg No</b></label>
    <br>
    <input type="number" placeholder="BMDC Reg No" name="email" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" >
    <br>
  </div>
  <div class="col-lg-6 col-md-6 col-sm-12 m-0 c">
    <label for="email"><b>Email</b></label>
    <br>
    <input type="text" placeholder="Ex: admin@gmail.com" name="email" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" >
    <br>
    <label for="number"><b>Year of experiance</b></label>
    <br>
    <input type="number" placeholder="Ex: 5" name="Experiance" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" >

     <br>
    <label for="BloodGroup"><b>Blood Group</b></label>
    <br>

    <select class="text" name="BloodGroup">
                <option value="NULL" >Select gender...</option>
                <option value="a+" > A+</option>
                <option value="b+" > B+</option>
                <option value="o+" > O+</option>
    </select>
    <span style="color:red;">

    <br>
    <label for="Text"><b>Bio Data</b></label>
    <br>
    <input type="text"  name="Bio" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" >

    <br>
    <label for="number"><b>BMDC Reg Year</b></label>
    <br>
    <input type="number" placeholder="BMDC Reg Year" name="BMDCyr" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" >

    <br>
  </div>
</div>
</div>
<div class="clearfix">
  <a type="submit" class="btn btn-primary btn-lg btn-warning" href="Logout.php">Log out</a>

  <button type="submit" class="btn btn-primary btn-lg btn-warning" name="form" value="Log In">Sign up</a></button>
</div>
</form>
  </body>
</html>
