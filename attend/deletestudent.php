<?php

include("config.php");
date_default_timezone_set('Asia/Kathmandu');
	       $date = date("Y-m-d");
           $ThisDate = date("d-m-Y", strtotime($date));
$delete_id = $_GET['delete'];
$sql = "DELETE FROM `student_details` WHERE  id='$delete_id'";
$result=mysqli_query($conn,$sql);
if ($result) {
   header('location:student.php?view_student=Student deleted successfully');
}
else{
   die($mysqli_error($conn));
}
   ?>
   