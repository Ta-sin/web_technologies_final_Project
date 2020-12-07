<?php

if (!isset($_SESSION['user_login'])){
  header('location: login.php');
}
 ?>


<h1 class="text-primary"><i class="fa fa-pencil-square"></i>Update Healthtips <small style="color:gray;">Update existing Healthtips</small></h1>
<ol class="breadcrumb">
  <li><a href="index.php?page=Dashboard"><i class="fa fa-dashboard"></i>Dashboard &#160;</a></li>
  <li><a href="index.php?page=DashboardInformation"><i class="fa fa-users"></i>All HealthTips &#160;</a></li>
  <li class="active"><i class="fa fa-pencil-square"></i> Update Healthtips</li>
</ol>

<?php
$id = base64_decode($_GET['id']);
$db_data = mysqli_query($link, "SELECT * FROM `health-tips` WHERE `id` = '$id'");
$db_row = mysqli_fetch_assoc($db_data);

if(isset($_POST['update-HealthTips'])){
  $About = $_POST['About'];
  $Headline = $_POST['Headline'];
  $Advise = $_POST['Advise'];
  $Contact = $_POST['Contact'];

$query = "UPDATE `health-tips` SET `About`='$About',`Headline`='$Headline',`Advise`='$Advise',`Contact`='$Contact' WHERE `id` = '$id'";

$result = mysqli_query($link, $query);
if($result){
  header('location: index.php?page=DashboardInformation');
}

}


 ?>


<div class="row">
  <div class="col-lg-6">
    <form class="" method="post" >
      <div class="form-group">
        <label for="About">About</label>
        <input type="text" value="<?= $db_row['About']?>" class="form-control" name="About" placeholder="details"  id="About" required="">
      </div>

      <div class="form-group">
        <label for="Headline">Headline</label>
        <input type="text"  value="<?= $db_row['Headline']?>" class="form-control" name="Headline" placeholder="Short Headline"  id="Headline" required="">
      </div>

      <div class="form-group">
        <label for="Advise">Advise</label>
        <input type="text"  value="<?= $db_row['Advise']?>" class="form-control" name="Advise" placeholder="Detailed Advise"  id="Advise" required="">
      </div>

      <div class="form-group">
        <label for="Contact">Contact</label>
        <input type="text"  value="<?= $db_row['Contact']?>" class="form-control" name="Contact" placeholder="Numbers" id="Contact" required="">
      </div>

      <div class="form-group ">
        <input class="btn btn-primary " type="submit" name="update-HealthTips" value="Update Health Tips"/>
      </div>

    </form>
  </div>
</div>
