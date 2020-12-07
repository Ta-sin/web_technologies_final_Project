<?php

if (!isset($_SESSION['user_login'])){
  header('location: login.php');
}
 ?>

  <h3>Package Available</h3>
  <div class="table-responsive">


  <table id="data" class="table table-hover table-bordered table-striped">
  <thead>
  <tr>
  <th>ID</th>
  <th>Package Name</th>
  <th>Package Details</th>
  <th>Package Price</th>

  </tr>
  </thead>
  <tbody>

  <?php
     $db_sinfo = mysqli_query($link, "SELECT * FROM `package-details`");

     while($row = mysqli_fetch_assoc($db_sinfo)){
     ?>


  <tr>
  <td><?php echo $row['id']; ?></td>
  <td><?php echo $row['PackageName']; ?></td>
  <td><?php echo $row['PackageDetails']; ?></td>
  <td><?php echo $row['PackagePrice']; ?></td>
  <td>

    <a href="delete_package.php?id=<?php echo base64_encode($row['id']); ?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i>Delete</a>
  </td>

  <?php
  }
 ?>
  </tr>
  </tbody>
  </table>
  </div>
