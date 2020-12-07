<h1 class="text-primary"><i class="fa fa-user"></i>User Profile <small> My profile</small></h1>
<ol class="breadcrumb">
  <li><a href="index.php?page=Dashboard"><i class="fa fa-dashboard"></i>Dashboard &#160;</li>
  <li class="active"><i class="fa fa-user"></i>Profile</li>
</ol>
<?php

$session_user = $_SESSION['user_login'];

$user_data = mysqli_query($link, "SELECT * FROM `doctor_info` WHERE `Full name` = '$session_user'");
$user_row = mysqli_fetch_assoc($user_data);

 ?>
<div class="row">
  <div class="col-lg-6">
    <table class="table table-bordered">
      <tr>
        <td>Name</td>
        <td><?= ucwords($user_row['Full name']); ?></td>
      </tr>
      <tr>
        <td>Mobile Number</td>
        <td><?= $user_row['Number']; ?></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><?= $user_row['Email']; ?></td>
      </tr>
      <tr>
        <td>BMDC Registration Number</td>
        <td><?= $user_row['BMDC']; ?></td>
      </tr>
    </table>
  
  </div>
  <div class="col-lg-6">
    <table>
      <tr>

      </tr>
    </table>
  </div>
</div>
