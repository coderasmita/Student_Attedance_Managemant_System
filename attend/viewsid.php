<?php
session_start();

include("function.php");
include("config.php");
include("header.php");
?>

<div class="content">
  <div style="background-color:#fff;">

    <h1 class="text-center">Student Details</h1>
  </div>



  <div class="menu-display">
    <div style="padding-left:350px;">
      <table class="content-table" border="1">
        <thead>
          <tr>
            <th>Student Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact no.</th>
            <th>Department</th>
          </tr>
        </thead>
        <tbody>


          <?php
          //select database
          $sql = "SELECT * FROM `student_details` ";

          $record = mysqli_query($conn, $sql);


          while ($post = mysqli_fetch_assoc($record)) {

          ?>
            <tr>
              <td><?php echo $post['id']; ?></td>
              <td><?php echo $post['name']; ?></td>
              <td><?php echo $post['email']; ?></td>
              <td><?php echo $post['contact_no']; ?></td>
              <td><?php echo $post['department']; ?></td>
            </tr>

          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php include("footer.php"); ?>