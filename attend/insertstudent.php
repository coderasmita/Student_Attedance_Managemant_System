<?php

include("config.php");
?>
<?php
if (isset($_POST['submit'])) {

  $name =  $_POST["name"];
  $gender =  $_POST["gender"];
  $email  = $_POST['email'];
  $Contact_No  = $_POST["contact"];
  $department  = $_POST["department"];

  $sql = "INSERT INTO `student_details`(`name`, `gender`, `email`,  `contact_no`, `department`) VALUES ('$name','$gender','$email','$Contact_No','$department')";

  if (mysqli_query($conn, $sql)) {
?>
    <script>
      {
        window.location = "student.php?view_student= Student added successfully.";
      }
    </script>
  <?php
  } else {
  ?>
    <script>
      {
        window.location = "student.php?view_student= Can not add student. Some error occured";
      }
    </script>

<?php
  }
}
?>