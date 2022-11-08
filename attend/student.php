<?php
include("config.php");
include("admin.php"); ?>


<?php

if (isset($_GET['insert_student'])) {

?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>

  <body bgcolor="cyan" ;>

    <style>
      .h-center {

        margin-left: 35%;
        background-color: cyan;

      }

      /* .hcenter {
        background-color: red;
      } */
    </style>

    <div class="container-fluid" style="padding-left:350px">
      <div class="title">

        <br><br>
        <h1>Add student</h1>
      </div>

      <div class="menu-display">
        <form action="insertstudent.php" name="regForm" method="POST" onsubmit="return formValidation()">
          <div class="user-details">
            <table style="height:300px;width:550px">
              <!-- <div class="input-box"> -->
              <tr>
                <td> Student's Full Name:</td>
                <td><input type="text" id="name" name="name" placeholder="      Enter your full name" style="width:200px; height:30px; border-radius:3px" required></td>
              </tr>
              <!-- </div> -->
              <!-- <div class="input-box"> -->
              <tr>
                <td style="background-color:cyan">Gender:</td>
                <td style="background-color:cyan;"><select id="gender" name="gender" placeholder="     Select your gender" style="padding-left:18px;width:200px; height:30px; border-radius:3px" required>
                    <option value="Select your gender">Select your gender</option>
                    <option name="Gender" value="Male">Male </option>
                    <option name="Gender" value="Female">Female</option>
                    <option name="Gender" value="Others">Others</option>
                  </select></td>
              </tr>

              <!-- </div> -->
              <!-- <div class="input-box"> -->
              <tr>
                <td> Email</td>
                <td><input type="email" id="email" name="email" placeholder="Enter your email" style="width:200px; height:30px; border-radius:3px" required></td>
              </tr>

              <!-- </div> -->
              <!-- <div class="input-box"> -->
              <tr>
                <td style="background-color:cyan"> Contact Number</td>
                <td style="background-color:cyan">
                  <input type="number" id="contact" name="contact" placeholder="Enter your number" style="width:200px; height:30px; border-radius:3px" required>
                </td>
              </tr>

              <!-- </div> -->
              <!-- <div class="input-box"> -->
              <tr>
                <td>Department</td>
                <td> <select id="department" name="department" placeholder="      Select your department" style="padding-left:18px; width:200px; height:30px; border-radius:3px" required>
                    <option value="Select your department">Select your department</option>
                    <option name="Department" value="IT">IT</option>
                    <option name="Department" value="Science">Science</option>
                    <option name="Department" value="Management">Management</option>
                  </select></td>
              </tr>
              <br>
              <span style="color:red" id="rDepartmentErr">
                <!-- </div> -->
                <!-- </div> -->
                <br> <br>
                <div class="center">
                  <tr>
                    <td colspan="2" style="background-color:cyan">
                      <button type="submit" name="submit" value="Submit" class="submit" style="border-radius:25px">Submit</button>
                    </td>
                  </tr>
                </div>
        </form>
      </div>
      </table>
    </div>
    <script src="assets/form.js"></script>
  <?php } ?>


  <!-- student details -->

  <?php


  if (isset($_GET['view_student'])) {

  ?>

    <div style="padding-left:200px">





      <div style="padding: 20px;">

        <h1 style="text-align:center;">View Students</h1>

      </div>









      <div class="menu-display">

        <table class="content-table" border="1">

          <thead>
            <tr>
              <th>Student Id</th>
              <th>Name</th>
              <th>Gender</th>
              <th>Email</th>
              <th>Contact No</th>
              <th>Department</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>


            <?php

            $sql = "SELECT * FROM `student_details` ";

            $record = mysqli_query($conn, $sql);


            while ($post = mysqli_fetch_assoc($record)) {

            ?>



              <tr>
                <td><?php echo $post['id']; ?></td>
                <td><?php echo $post['name']; ?></td>
                <td><?php echo $post['gender']; ?></td>
                <td><?php echo $post['email']; ?></td>
                <td><?php echo $post['contact_no']; ?></td>
                <td><?php echo $post['department']; ?></td>
                <td><a href="editstudent.php?edit=<?php echo $post['id']; ?>">edit</a></td>
                <td><a href="deletestudent.php?delete=<?php echo $post['id']; ?>">delete</a></td>
              </tr>



            <?php } ?>
          </tbody>
          <div style="padding: 20px;"></div>
        </table>

      </div>
    </div>

    </div>

  </body>

  </html>
<?php } ?>

<!-- details end -->


<?php include("footer.php"); ?>