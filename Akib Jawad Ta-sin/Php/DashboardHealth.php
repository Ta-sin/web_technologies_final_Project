<?php

if (!isset($_SESSION['user_login'])){
  header('location: login.php');
}
 ?>


<h1 class="text-primary"><i class="fa fa-user-plus"></i> Healthtips <small style="color:gray;">Add New Healthtips</small></h1>
<ol class="breadcrumb">
  <li><a href="index.php?page=Dashboard"><i class="fa fa-dashboard"></i>Dashboard &#160;</a></li>
  <li class="active"><i class="fa fa-user-plus"></i> Add Healthtips</li>
</ol>

<?php
if(isset($_POST['HealthTips'])){
  $About = $_POST['About'];
  $Headline = $_POST['Headline'];
  $Advise = $_POST['Advise'];
  $Contact = $_POST['Contact'];

$query = "INSERT INTO `health-tips`(`About`, `Headline`, `Advise`, `Contact`) VALUES ('$About','$Headline','$Advise','$Contact')";

$result = mysqli_query($link, $query);

if($result){
  $success = "Data Insert success";
} else {
  $error = "Warning";
}
}
 ?>








<div class="row">
  <?php if(isset($success)){echo '<p class="alert alert-success col-lg-6">'.$success.'</p>';}
   ?>
   <?php if(isset($error)){echo '<p class="alert alert-danger col-lg-6">'.$error.'</p>';}
    ?>
</div>
<div class="row">
  <div class="col-lg-6">
    <form class="" method="post" >
      <div class="form-group">
        <label for="About">About</label>
        <input type="text" class="form-control" name="About" placeholder="details"  id="About" required="">
      </div>

      <div class="form-group">
        <label for="Headline">Headline</label>
        <input type="text" class="form-control" name="Headline" placeholder="Short Headline"  id="Headline" required="">
      </div>

      <div class="form-group">
        <label for="Advise">Advise</label>
        <input type="text" class="form-control" name="Advise" placeholder="Detailed Advise"  id="Advise" required="">
      </div>

      <div class="form-group">
        <label for="Contact">Contact</label>
        <input type="text" class="form-control" name="Contact" placeholder="Numbers" id="Contact" required="">
      </div>

      <div class="form-group ">
        <input class="btn btn-primary " type="submit" name="HealthTips" value="Submit Health Tips"/>
      </div>

    </form>
  </div>
</div>
