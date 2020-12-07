<?php

if (!isset($_SESSION['user_login'])){
  header('location: login.php');
}
 ?>

  <h3>Health Tips</h3>
  <div class="table-responsive">


  <table id="data" class="table table-hover table-bordered table-striped">
  <thead>
  <tr>
  <th>ID</th>
  <th>About</th>
  <th>Headline</th>
  <th>Advise</th>

  </tr>
  </thead>
  <tbody>

  <?php
     $db_sinfo = mysqli_query($link, "SELECT * FROM `health-tips`");

     while($row = mysqli_fetch_assoc($db_sinfo)){
     ?>


  <tr>
  <td><?php echo $row['id']; ?></td>
  <td><?php echo $row['About']; ?></td>
  <td><?php echo $row['Headline']; ?></td>
  <td><?php echo $row['Advise']; ?></td>
  <td>


      <a href="index.php?page=DashboardHealthUpdate&id=<?php echo base64_encode($row['id']); ?>" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i>Edit</a>
    <a href="delete_student.php?id=<?php echo base64_encode($row['id']); ?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i>Delete</a>
  </td>

  <?php
  }
 ?>
  </tr>
  </tbody>
  </table>
  </div>
