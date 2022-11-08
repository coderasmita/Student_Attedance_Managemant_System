<?php
session_start();
include("function.php");
include("config.php");
include("header.php");
?>
<div= class="flex">
  <div class="content">
    <div style="background-color:#fff;">
      <h1 class="text-center"><br><br>View Attendace</h1>
      <br>
      <p class="text-center">Enter your ID <br><br></p>
    </div>

    <form style="margin: auto; width: 220px;" action="" method="post">
      <div class="form-group">
        Student ID:
        <br>
        <input type="text" name="sid" placeholder="Enter SID" required>
      </div>
      <br>
      <br>
      <button type="submit" class="submit">Submit</button>
    </form>
    <br>
  </div>
  <?php

  if (isset($_POST['sid'])) {

  ?>
    <?php
    $sid = $_POST['sid'];
    //   $conn = mysqli_connect('localhost','root','','attendance');
    $sql = "SELECT * FROM `attendance_taken` WHERE sid='$sid'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $total = $row[0];
    $today = strval($total);
    if ($total == 0) {
    ?>
      <script>
        // window.location = "admin.php?view_employee=view_employee";
        if (!alert("sid is wrong.Please reconfirm SID then try again ")) {
          window.location = "viewattendanceuser.php";
        }
      </script>
    <?php } else {
    ?>

      <div style="padding: 30px;">
        <div style="background-color:#fff;">

          <h1 class="text-center">Full attendance can be seen below.</h1>
        </div>


        <div class="">
          <div style="padding-left: 30px;">
            <table class="content-table" border="1">
              <thead>
                <tr>
                  <th>Student ID</th>
                  <th>Name</th>
                  <th>Date</th>
                  <th>Present/Absent</th>
                </tr>
              </thead>
              <tbody>


                <?php
                //select database
                $sid = $_POST['sid'];

                $sql = "SELECT * FROM `attendance_taken` WHERE sid='$sid' ORDER BY id ASC";

                $record = mysqli_query($conn, $sql);


                while ($post = mysqli_fetch_assoc($record)) {

                ?>



                  <tr>
                    <td><?php echo $post['sid']; ?></td>
                    <td><?php echo $post['name']; ?></td>
                    <td><?php echo $post['date']; ?></td>
                    <td><?php echo $post['attendance']; ?></td>
                  </tr>


                <?php } ?>
              </tbody>
          </div>
          </table>
        </div>
      </div>


    <?php } ?>

  <?php } ?>
  </div>


  <?php include("footer.php"); ?>