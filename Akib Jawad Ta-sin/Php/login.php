<?php
session_start();
require_once './dbcon.php';
if(isset($_POST['registration'])){
  $name = $_POST['name'];
  $mnumber = $_POST['mnumber'];
  $email = $_POST['email'];
  $pwd = $_POST['pwd'];
  $cpwd = $_POST['cpwd'];
  $BMDC = $_POST['BMDC'];

  $error_msg = array();
  if($_POST['name'] == ""){
    $error_msg['name'] = "Name cannot be empty!";
  }
  if(!preg_match("/^[a-zA-Z -]*$/",$name)){
    $error_msg['name'] = "Only letters allowed";
  }
  if(empty($mnumber)){
    $error_msg['mnumber'] = "Number is required";
  }
  else if(!is_numeric($mnumber)){
    $error_msg['mnumber'] = "Only numbers allowed";
  }
  else if(strlen($mnumber) !=11){
    $error_msg['mnumber'] = "Mobile number have to be 11 digits";
  }
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $error_msg['email'] = "Invalid email address";
  }
  if($pwd == $cpwd){
    $pwd = md5($pwd);

  }else {
    $pwd_not_match = "Confirm password dosen't match";
  }
  if(empty($BMDC)){
    $error_msg['BMDC'] = "BMDC Number is required";
  }
  else if(!is_numeric($BMDC)){
    $error_msg['BMDC'] = "Only numbers allowed";
  }
  else if(strlen($BMDC) != 6){
    $error_msg['BMDC'] = "BMDC number have to be 6 digits";
  }
  if(count($error_msg) == 0){
    $email_check = mysqli_query($link, "SELECT * FROM `doctor_info` WHERE `Email` = '$email';");
    if (mysqli_num_rows($email_check) == 0) {
    $mnumber_check = mysqli_query($link, "SELECT * FROM `doctor_info` WHERE `Number` = '$mnumber';");
    if (mysqli_num_rows($mnumber_check) == 0){
    $BMDC_check = mysqli_query($link, "SELECT * FROM `doctor_info` WHERE `BMDC` = '$BMDC';");
    if (mysqli_num_rows($BMDC_check) == 0){

    $query = "INSERT INTO `doctor_info`(`Full name`, `Number`, `Email`, `Password`, `BMDC`) VALUES ('$name','$mnumber','$email','$pwd','$BMDC')";
    $result = mysqli_query($link, $query);
    if($result){
      $_SESSION['data_insert_success'] = "Data Insert success!";
      header('location: DoctorLogin.php');
    }
    else {
      $_SESSION['data_insert_error'] = "Data Insert error";
    }

    }else {
        $BMDC_error = "BMDC number exists";
      }
    }else {
      $mnumber_error = "Mobile number Already exists";
    }
    } else {
      $email_error = "Already exist";
    }
  }
}
 ?>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Registration page</title>
  <link rel="stylesheet" href="CSS\bootstrap.min.css">
  <link rel="stylesheet" href="CSS\Registration.css">
</head>

<body>
  <form  action="" method="POST" enctype="multipart/form-data">
  <div class="Container-fluid">
    <div class="row">

      <div class="col-lg-6 col-md-6 col-sm-12 m-0 ">
        <div class="container">
          <h1>Sign Up</h1>
          <p>Please fill in this form to create an account.</p>
          <?php if(isset($_SESSION['data_insert_success'])){
            echo'<div class="alert alert-success">'.$_SESSION['data_insert_success'].'</div>';
          } unset($_SESSION['data_insert_success']);?>

          <?php if(isset($_SESSION['data_insert_error'])){
            echo'<div class="alert alert-warning">'.$_SESSION['data_insert_error'].'</div>';
          } unset($_SESSION['data_insert_error']);?>
          <hr>

          <label for="name"><b>Full name</b></label>
          <br>
          <div class="input-group input-group-sm mb-3">

            <input value="<?php if(isset($name)){echo $name;} ?>" type="text" name="name" id="name" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Enter your Full name">
            <span style="color:red;">
         <?php
             if(isset($error_msg['name'])){
               echo $error_msg['name'];
             }
          ?>
          </span>
          </div>
          <br>
          <label for="number"><b>Mobile Number</b></label>
          <br>
          <input value="<?php if(isset($mnumber)){echo $mnumber;} ?>" type="number" name="mnumber"  placeholder="Enter your mobile number" name="email" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
          <span style="color:red;">
       <?php
           if(isset($error_msg['mnumber'])){
             echo $error_msg['mnumber'];
           }
        ?>
        </span>
        <span style="color:red;">
     <?php
         if(isset($mnumber_error)){
           echo $mnumber_error;
         }
      ?>
      </span>
          <br>
          <label for="email"><b>Email</b></label>
          <br>
          <input value="<?php if(isset($email)){echo $email;} ?>" type="text" name="email"  placeholder="Enter Email" name="email" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
          <span style="color:red;">
       <?php
           if(isset($error_msg['email'])){
             echo $error_msg['email'];
           }
        ?>
        </span>
        <span style="color:red;">
     <?php
         if(isset($email_error)){
           echo $email_error;
         }
      ?>
      </span>
          <br>

          <label for="pwd"><b>Password</b></label>
          <br>
          <input value="<?php if(isset($pwd)){echo $pwd;} ?>" type="password" name="pwd"  placeholder="Enter Password" name="pwd" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" >
          <span style="color:red;">
       <?php
           if(isset($error_msg['pwd'])){
             echo $error_msg['pwd'];
           }
        ?>
        </span>
        <span style="color:red;">
     <?php
         if(isset($pwd_not_match)){
           echo $pwd_not_match;
         }
      ?>
      </span>
          <br>
          <label for="cpsw"><b>Confirm Password</b></label>
          <br>
          <input value="<?php if(isset($cpwd)){echo $cpwd;} ?>" type="password" name="cpwd"  placeholder="Confirm your Password" name="pwd" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" >
          <span style="color:red;">
       <?php
           if(isset($error_msg['cpwd'])){
             echo $error_msg['cpwd'];
           }
        ?>
        </span>
          <br>
          <label for="BMDnumber"><b>BMDC Registration Number</b></label>
          <br>
          <input value="<?php if(isset($BMDC)){echo $BMDC;} ?>" type="number" name="BMDC"  placeholder="BMDC Registration Number" name="BMDnumber" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" >
          <span style="color:red;">
       <?php
           if(isset($error_msg['BMDC'])){
             echo $error_msg['BMDC'];
           }
        ?>
        </span>
        <span style="color:red;">
     <?php
         if(isset($BMDC_error)){
           echo $BMDC_error;
         }
      ?>
      </span>
          <br>
          <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
          </label>

          <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

          <div class="">
            <a class="btn btn-primary btn-lg btn-warning" href="DoctorLogin.php">Log in</a>

            <button type="submit" class="btn btn-primary btn-lg btn-warning" name="registration" >Registration</a></button>
            </form>
          </div>
        </div>

</div>
<div class="col-lg-6 col-md-6 col-sm-12 text-center mt-5 ">
  <img src="Images\gallery6.jpg" alt="..." class="img-thumbnail">
</div>
</div>
</div>

</body>
</html>
