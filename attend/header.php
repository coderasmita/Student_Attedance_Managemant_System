<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Attendance Header</title>
</head>
<link rel="stylesheet" href="assets/header.css">
<link rel="stylesheet" href="assets/index.css">
<link rel="stylesheet" href="assets/footer.css">
<link rel="stylesheet" href="assets/all.css">


<body>
  <!-- Heder part start -->
  <nav class="header">
    <div class="logo">
      <h2>Student's Attendance Management System</h2>
    </div>

    <ul class="nav-links">

      <?php
      if (isset($_SESSION['username'])) {
      ?>
        <li> <a href="viewsid.php">Check Student ID</a></li>
        <li> <a href="viewattendanceuser.php">View Attendance</a></li>
        <li> <a href="logout.php">Logout</a></li>

      <?php
      } else {

      ?>
        <li> <a href="index.php">Login</a></li>
      <?php

      }
      ?>
    </ul>
  </nav>