<?php


include("config.php");
if(isset($_POST['delete'])) {

	
date_default_timezone_set('Asia/Kolkata');
	       $date = date("Y-m-d");
           $ThisDate = date("d-m-Y", strtotime($date));
		   
// sql to delete a record

$sql = "DELETE FROM `attendance_taken` WHERE date='$ThisDate'";

if ($conn->query($sql) === TRUE) {
   ?>
   <script>
       
      {window.location = "attendancepannel.php?delete=attendance deleted successfully.";}
   
   </script>
   <?php
       } 
   else {
    ?>
     <script>
      
      {window.location = "attendancepannel.php?delete=Can not delete attendance.Some error occured";}
     </script>
   <?php
   }

$conn->close();

			  }
?>