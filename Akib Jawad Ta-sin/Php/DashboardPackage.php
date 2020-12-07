<?php

if (!isset($_SESSION['user_login'])){
  header('location: login.php');
}
 ?>


 <h1 class="text-primary"><i class="fa fa-user-plus"></i> Packages <small style="color:gray;">Add New Packages</small></h1>
 <ol class="breadcrumb">
   <li><a href="index.php?page=Dashboard">Dashboard &#160;</a></li>
   <li class="active"><i class="fa fa-user-plus"></i> Add Packages</li>
 </ol>

 <?php
 if(isset($_POST['HealthTips'])){
   $Pname = $_POST['Pname'];
   $Pdetails = $_POST['Pdetails'];
   $Pprice = $_POST['Pprice'];

 $query = "INSERT INTO `package-details`(`PackageName`, `PackageDetails`, `PackagePrice`) VALUES ('$Pname','$Pdetails','$Pprice')";

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
     <form class="" method="post" enctype="multiple/form-data">
       <div class="form-group">
         <label for="Pname">Package Name</label>
         <input type="text" class="form-control" name="Pname" placeholder="Write package name" id="Pname">
       </div>

       <div class="form-group">
         <label for="Pdetails">Package Details</label>
         <input type="text" class="form-control" name="Pdetails" placeholder="Give some short description" id="Pdetails">
       </div>

       <div class="form-group">
         <label for="Pprice">Package Price</label>
         <input type="number" class="form-control" name="Pprice" placeholder="0.00" id="Pprice">
       </div>

       <div class="form-group ">
         <input class="btn btn-primary " type="submit" name="HealthTips" value="Submit Package Details"/>
       </div>

     </form>
   </div>
 </div>
