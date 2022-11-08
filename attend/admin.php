<?php
//  header("location: config.php"); 
session_start();

//  if(!isset($_SESSION['username'])) {

//     header("location: index.php"); 
//     }
//  else {

?>

<?php
// $file="admin";
include("header.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>

   </style>
</head>

<body>

   <!-- <marquee behavior="alternate" direction="left" lopp=""><h3 style="background-color:powderblue";>Welcome to Student Attendance </h3></marquee> -->
   <!-- <div class="myimg">
    <img src="./img/student.jpg" alt="" width="200px" height="200px">
    </div> -->
   <div class="flex">
      <div class="sidebar">

         <a class="a_color" href="attendancepannel.php"><button type="button" class="btn1">Take Attendance</button></a>
         <br>
         <a class="a_color" href="daily-history.php"><button type="button" class="btn1">Today's attendance</button></a>

         <br>
         <a class="a_color" href="viewattendancefull.php"><button type="button" class="btn1"> Attendance History</button></a>
         <br>
         <a class="a_color" href="student.php?insert_student=insert_student"><button type="button" class="btn1">Insert New Student</button></a>
         <br>
         <!-- <a class="a_color" href="insertadmin.php"><button type="button" class="btn btn-primary btn-lg">Insert New Admin</button></a> -->


         <a class="a_color" href="student.php?view_student=view_student"><button type="button" class="btn1">View Students Details</button></a>
         <br>
         <a class="a_color" href="logout.php"><button type="button" class="btn1">Logout</button></a>
      </div>
</body>

</html>