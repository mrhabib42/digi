<?php include 'header.php';
?>

<section class="bg-light vh-100 d-flex">
  <div class="col-3 m-auto">
    <div class="card">
      <div class="card-body">
        <div class="rounded-circle mx-auto d-flex " style="width:100px;height:100px">
          <div class="login-logo">
            <img src="./dist/logo/Habib App (1).png" class="img-fluid" alt="">
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
            <input type="text" id="inputPassword5" name="email" class="form-control" placeholder="Enter Username">
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

<?php include 'footer.php' ?>