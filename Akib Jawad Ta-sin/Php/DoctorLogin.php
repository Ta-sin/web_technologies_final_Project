<?php
require_once './dbcon.php';
session_start();
if(isset($_POST['Login'])){
  $name = $_POST['name'];
  $pwd = $_POST['pwd'];

$name_check = mysqli_query($link, "SELECT * FROM `doctor_info` WHERE `Full name` = '$name'");
if(mysqli_num_rows($name_check)> 0){
$row = mysqli_fetch_assoc($name_check);
if($row['Password'] == md5($pwd)){

  $_SESSION['user_login'] = $name;
  header('location: index.php');

  setcookie("username",$name,time()+2240000,"/");
  setcookie("password",$pwd,time()+2240000,"/");

} else {
  $wrong_pwd = "Password is wrong";
}
} else {
  $name_not_found = "This username not found";
}
}

 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Doctor Login</title>
    <link rel="stylesheet" href="CSS\bootstrap.min.css">
    <link rel="stylesheet" href="CSS\DoctorLogin.css">
  </head>
  <body>
   <div class="container animated shake">
  <h1 class="text-center">Doctor Login</h1>
  <div class="row">
    <div class="col-sm-4 col-lg-4 col-sm-offset">
      <h3 >Doctor Login Form</h3>
      <form  action="" method="post">
        <div>
          <input type="text" placeholder="name" name="name" class="form-control" value="<?php if(isset($_COOKIE["username"])){echo $_COOKIE["username"];} ?>">
        </div>
        <div>
          <input type="password" placeholder="password" name="pwd" class="form-control" value="<?php if(isset($_COOKIE["password"])){echo $_COOKIE["password"];} ?>">
        </div>
        <br>
        <div >
          <input type="submit" name="Login" value="login" class="btn btn-info pull-left">
        </div>
      </form>
    </div>
  </div>
  <?php if(isset($name_not_found)){echo '  <div class="alert alert-danger col-lg-offset-5">'.$name_not_found.'</div>';} ?>
  <?php if(isset($wrong_pwd)){echo '  <div class="alert alert-danger col-lg-offset-5">'.$wrong_pwd.'</div>';} ?>


   </div>
  </body>
</html>
