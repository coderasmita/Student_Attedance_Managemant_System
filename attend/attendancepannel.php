<?php
// include("function.php");
if (!isset($_SESSION['username'])) {
  
}else{
  header('location:index.php');
}

include("config.php");
include("admin.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


</head>

<body bgcolor=" cyan">
  <style>
    .h-center {
      margin-right: 43%;


    }
  </style>



  <div class="content">

    <div class="menu-display">
      <!-- Checking if attendance is taken for today -->
      <?php
      date_default_timezone_set('Asia/Kathmandu');
      $date = date("Y-m-d");
      $ThisDate = date("d-m-Y", strtotime($date));
      $result = mysqli_query($conn, "SELECT * FROM `attendance_taken` WHERE `date` = '" . $ThisDate . "'");
      $row = mysqli_fetch_assoc($result);

      $total = mysqli_num_rows($result);

      $today = strval($total);
      if ($total > 0) {
      ?>
        <h3 class="text-center">Attandance for Today (<?php echo $ThisDate;  ?>) has been taken.</h3>
        <h4 class="text-center">View Today's attendance <a href="daily-history.php">here</a>.</h4>
        <br>
        <h3 class="text-center">If you want to take attendance or update then

          <form action="deleteattendance.php" method="post">
            <input type="submit" name="delete" class="submit" value="delete"> previous attendance of today and retake

          </form>
        </h3>

      <?php
        // echo $total;
      } else {

      ?>
        <div class="h-center">

          <h2>Take attendance</h2>
          <br>
          <p>Today's Date is: <?php echo $ThisDate;  ?></p>

        </div>


        <?php

        $result = mysqli_query($conn, "select count(1) FROM student_details");
        $row = mysqli_fetch_array($result);

        $total = $row[0];

        ?>


        <div>

          <table class="content-table" border="1">
            <thead>
              <tr>
                <th>Student Id</th>
                <th>Name</th>
                <th>Present</th>
                <th>Absent</th>
              </tr>
            </thead>
            <tbody>



              <?php



              //select database


              $sql = "SELECT * FROM `student_details` ";

              $record = mysqli_query($conn, $sql);


              $loop = -1;
              while ($post = mysqli_fetch_assoc($record)) {
                $loop++;

              ?>

                <form action="insertattendance.php" method="post">

                  <input type="hidden" value="<?php echo $total; ?>" name="numbers" />
                  <input type="hidden" value="<?php echo $post['id']; ?>" name="sid[]" />
                  <input type="hidden" value="<?php echo $post['name']; ?>" name="name[]" />
                  <tr>
                    <td><?php echo $post['id']; ?></td>
                    <td><?php echo $post['name']; ?></td>
                    <td><label><input type="radio" name="attendance<?php echo $loop; ?>" value="present">Present</label></td>
                    <td><label><input type="radio" name="attendance<?php echo $loop; ?>" value="absent">Absent</label></td>


                  </tr>


                  <!-- function for today's date -->
                  <?php
                  date_default_timezone_set('Asia/Kathmandu');
                  $date = date("Y-m-d");
                  $ThisDate = date("d-m-Y", strtotime($date));
                  ?>

                  <input type="hidden" value="<?php echo $ThisDate; ?>" name="date[]" />



                <?php } ?>
                <!-- while ended here -->



            </tbody>
          </table>
          <br><br>
          <div class="flex">
            <button type="submit" name="submit" value="submit" class="submit">Submit</button>

          </div>
          </form>
        </div>

      <?php } ?>
      <!-- else Ended here -->




      <?php  ?>
      <!-- session Ended here -->
      <?php include("footer.php"); ?>
    </div>
  </div>

</body>

</html>