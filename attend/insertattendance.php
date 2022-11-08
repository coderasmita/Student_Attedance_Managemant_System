<?php
// include("function.php");
include("config.php");
 if(isset($_POST['submit'])) {


  
 //  $eid =  $_POST["eid"];
   //$name =  $_POST["name"];
   //$date  = $_POST['date'];
   //$attendance  = $_POST["attendance"];
 

$s = "INSERT INTO `attendance_taken`(`sid`, `name`, `date`, `attendance`) VALUES";
	for($i=0;$i<$_POST['numbers'];$i++)
	{
    $s .="('".$_POST['sid'][$i]."','".$_POST['name'][$i]."','".$_POST['date'][$i]."','".$_POST['attendance'.$i]."'),";
  }
    $s = rtrim($s,",");
  
  //$sql = "INSERT INTO `attendance_taken`(`eid`, `name`, `date`, `attendance`) VALUES ('$eid','$name','$date','$attendance')";

  if (mysqli_query($conn,$s))
  {
  ?>
   <script>
      //window.location = "admin.php";
        {window.location = "attendancepannel.php";}
   
   </script>
   <?php
       } 
   else {
    ?>
     <script>
     {window.location = "attendancepannel.php";}
   
     </script>
   <?php
   }
   

 
  
  }

?>