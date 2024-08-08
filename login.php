<?php include 'header.php';
?>

<!-- <?php
// print_r(password_hash("admin", PASSWORD_DEFAULT));
// die();
?> -->
<section class="row bg-light vh-100 d-flex ">
  <div class="col-lg-3 col-md-3 col-sm-3 m-auto">
    <div class="card">
      <div class="card-body">
        <div class="rounded-circle mx-auto d-flex" style="width:100px; height:100px;">
          <div class="login-logo">
            <img src="./dist/logo/logo.png" class="img-fluid" alt="">
          </div>
        </div>
        <style>
          img {
            position: relative;
            right: 26px;
            height: 300px;
            width: 400px;
          }

        </style>

        <!--Form-->
        <form action="./login_process.php" method="POST">
          <!-- Material input -->
          <div class="form-group">
            <label for="inputPassword5" class="form-label">User Name</label>
            <input type="text" id="inputPassword5" name="username" class="form-control" placeholder="Enter Username">
          </div>
          <!-- Material input -->
          <div class="form-group">
            <label for="password">Your Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password">
          </div>
          <div class="text-center">
            <button class="btn web-btn btn-block" name="login">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
</div>