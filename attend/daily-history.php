  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daily</title>
  </head>

  <body>
    <style>
      .h-center {
        margin-right: 100%;


      }
    </style>


    <?php
    include("config.php");
    //  session_start();

    //  if(!isset($_SESSION['username'])) {

    //     header("location: login.php"); 
    //     }
    //  else {

    ?>

    <?php include("admin.php"); ?>

    <div class="content">
      <div style="background-color:#fff;">
        <br><br><br>
        <h1 class="text">List of students according to their ID</h1>
      </div>



      <div class="menu-display">

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
            date_default_timezone_set('Asia/Kolkata');
            $date = date("Y-m-d");
            $Today = date("d-m-Y", strtotime($date));
            ?>
            <?php
            //select database

            $sql = "SELECT * FROM `attendance_taken` WHERE date='$Today' ORDER BY id ASC";

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

    <?php include("footer.php"); ?>


  </body>

  </html>