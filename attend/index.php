<?php

session_start();
include("config.php");

?>


<?php include("header.php") ?>


<div>
  <form action="" method="post" name="Login_Form" class="form-signin">

    <div class="login-box" style="display: flex; flex-direction: column;text-align: initial;">
      <h1 style="text-align: initial;">Login</h1>
      <br>
      <?php
      if (isset($_GET['wrong'])) {

      ?> <div>
          <font color="red">
            Either your username or password is wrong
          </font>
        </div>
      <?php } ?>

      <div class="textbox">
        <input type="text" name="username" placeholder="Enter Username" required>
      </div>

      <div class="textbox">
        <input type="password" name="password" placeholder="Enter Password" required>
      </div>
      <br>
      <input type="submit" value="Login" class="btn" name="login" required>

    </div>
  </form>
</div>

</body>


<?php include("footer.php") ?>
<?php

if (isset($_POST['login'])) {

  $user_name = $_POST['username'];
  $user_password = $_POST['password'];

  $encrypt = md5($user_password);

  $login_query = "SELECT `username`, `password` FROM `teacher` WHERE username='$user_name' AND password='$encrypt'";

  $run = mysqli_query($conn, $login_query);

  if (mysqli_num_rows($run) > 0) {

    $_SESSION['username'] = $user_name;
    // header('location : attendancepannel.php');
    echo "<script>window.open('attendancepannel.php','_self')</script>";
    // echo" logged in";
  } else {
    echo "<script>window.open('index.php?wrong=1','_self')</script>";
    // echo" wrong username/password";
  }
}
?>