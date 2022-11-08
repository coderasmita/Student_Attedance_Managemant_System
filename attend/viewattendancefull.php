<?php
// include("function.php");
include("config.php");

?>

<?php include("admin.php"); ?>

<div class="content">
   <div style="background-color:#fff;">
      <br><br><br>

      <h1 class="text">Full attendance can be seen below.</h1>
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
            //select database

            $sql = "SELECT * FROM `attendance_taken` ORDER BY id ASC";

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
      </table>
   </div>
</div>


<?php include("footer.php"); ?>