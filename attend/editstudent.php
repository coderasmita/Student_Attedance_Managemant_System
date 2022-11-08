<?php

include("config.php");
include("admin.php");
?>

<div class="content">
  <div style="background-color:#fff;">

    <h1 class="text-center">List of students according to their ID</h1>
  </div>



  <div class="menu-display">

    <table class="content-table" border="1">
      <tr>
        <th>Student Id</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Contact No</th>
        <th>Department</th>
      </tr>
      </thead>
      <tbody>

        <form action="" method="post" enctype="multipart/form-data">
          <?php

          //select database
          $edit_id = @$_GET['edit'];

          $sql = "SELECT * FROM `student_details` WHERE id='$edit_id' ";

          $record = mysqli_query($conn, $sql);


          while ($post = mysqli_fetch_assoc($record)) {

          ?>



            <tr>
              <td><?php echo $post['id']; ?></td>
              <td><input type="text" name="name" class="input-box" id="formGroupExampleInput" value="<?php echo $post['name']; ?>" placeholder="name"></td>
              </td>
              <td><input type="text" name="gender" class="input-box" id="formGroupExampleInput" value="<?php echo $post['gender']; ?>" placeholder="name"></td>
              </td>
              <td><input type="text" name="email" class="input-box" id="formGroupExampleInput" value="<?php echo $post['email']; ?>" placeholder="name"></td>
              </td>
              <td><input type="text" name="contact_no" class="input-box" id="formGroupExampleInput" value="<?php echo $post['contact_no']; ?>" placeholder="name"></td>
              </td>
              <td><input type="text" name="department" class="input-box" id="formGroupExampleInput" value="<?php echo $post['department']; ?>" placeholder="name"></td>
              </td>
            </tr>


      </tbody>
    </table>
    <br>
    <div class="flex">
      <button type="submit" name="update" value="update" class="submit">update</button>
    </div>
    </form>
  </div>
</div>

<?php
            if (isset($_POST['update'])) {

              // $conn = mysqli_connect('localhost','root','','attendance');


              $update_id = @$_GET['edit'];

              $name =  $_POST["name"];
              $gender  = $_POST['gender'];
              $email  = $_POST['email'];
              $contact  = $_POST['contact_no'];
              $department = $_POST['department'];



              $sql1 = "UPDATE `student_details` SET `name`='$name',`gender`='$gender',`email`='$email', `contact_no`='$contact',`department`='$department' WHERE id='$update_id'";

              if (mysqli_query($conn, $sql1)) {
?>
    <script>
      {
        window.location = "student.php?view_student?edit= Student updated successfully";
      }
    </script>
  <?php
              } else {
  ?>
    <script>
      {
        window.location = "student.php?view_student?edit=Can't update student details.Some error occured";
      }
    </script>
<?php
              }
            }

?>
<?php } ?>
</div>
<?php include("footer.php"); ?>