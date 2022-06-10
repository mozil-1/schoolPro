<?php
 session_start();
 if (isset($_GET['error'])) {
   if ($_GET["error"]=="emptyfields") {
     echo '<p class="signuperror">Fill in all fields</p>';
   }
   elseif ($_GET["error"]=="invalidmail") {
      echo '<p class="signuperror">Invalid Email</p>';
   }
   elseif ($_GET["error"]=="invaliduid") {
      echo '<p class="signuperror">Invalid Username</p>';
   }
   elseif ($_GET["error"]=="passwordcheck") {
      echo '<p class="signuperror">Your password do not match</p>';
   }
   elseif ($_GET["error"]=="usertaken") {
      echo '<p class="signuperror">Username is already taken</p>';
   }
   } 
    if (isset($_GET['register'])) {
     if ($_GET["register"]=="success") {
      echo '<p class="signupsuccess">Register successful</p>';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

  <?php
  include 'function/functions.php';
  require_once 'admin/classes/db.php';
  include 'layout/head.php';
  ?>

    <body>
    
      <div class="container">
          <div class="col-md-12">
            <div class="box">
                <div class="box-content">
                  <h3 class="heading text-center">Register An Account</h3>
                  <div class="clearfix space40"></div>
                  <?php if(isset($_GET['message'])){ 
                      if($_GET['message'] == 2){
                  ?>
                    <div class="alert alert-danger" role="alert"> <?php echo "Failed to Register"; ?> </div>
                    <?php } } ?>
                  <form class="logregform" method="post" action="registerprocess.php">
                    <div class="form-group">
                      <div class="form-row">
                        <div class="col-md-6">
                          <div class="form-label-group">
                          <label for="firstName">First name</label>
                            <input type="text" id="firstName" name="firstname" class="form-control" placeholder="First name"autofocus="autofocus">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-label-group">
                          <label for="lastName">Last name</label>
                            <input type="text" id="lastName" name="lastname" class="form-control" placeholder="Last name">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                        <label>E-mail Address</label>
                        <input type="email" name="email" value="" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-6">
                        <label>Password</label>
                        <input type="password" name="password" value="" class="form-control">
                      </div>
                      <div class="col-md-6">
                        <label>Re-enter Password</label>
                        <input type="password" name="passwordagain" value="" class="form-control">
                      </div>
                    </div>
                        <div class="col-md-12">
                          <div class="space20"></div>
                          <p></p>
                          <button type="submit" class="btn btn-md pull-right">Register</button>
                        </div>
                      </div>
                  </form>
                  <div class="text-center">
                    <a class="d-block small mt-3" href="login.php">Login Page</a>
                    <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
                    <a class="d-block small mt-3" href="index.php">Home</a>
                  </div>
                </div>
            </div>
          </div>
      </div>
      <?php include 'layout/footer.php';?>
   </body>
</html>
