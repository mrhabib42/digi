<?php
include "header.php";
include 'config.php';

if(isset($_SESSION['user_credentials']) && $_SESSION['user_credentials']!=""){
  $email = $_SESSION['user_credentials']["email"];
  $query = "SELECT * FROM `create_user` WHERE user_username ='$email';";
  $result = mysqli_query($db_conn, $query);
  if ($result->num_rows == 1) {
    $data = mysqli_fetch_assoc($result);
  }else{
      header("Location: logout.php");
      die();
  }
}else{
  header("Location: logout.php");
  die();
}
// if (!isset($_SESSION["email"])) {
//   header('Location: login.php');
// }
?>
<?php include "sidebar.php" ?>
<!-- Content Header (Page header) -->
<!-- <div class="content-header"> -->
<div class="container-fluid">
  <div class="card p-4" style="height:100px">
    <div class="d-flex">
      <div class="welcome-img px-4">
        <img src="<?= "uploads/".$data['user_img']?>" class="img-fluid rounded-circle" height="0" width="60" alt="user-profile">
      </div>
      <div class="welcome-data">
        <h4><?= $data['user_username'] ?></h4>
        <p id="C_date" class="text-muted">
          <script>
            let days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
            let months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "November", "December"]
            let date = new Date()

            document.getElementById("C_date").innerText = days[date.getDay()] + ", " + date.getDate() + " " + months[date.getMonth()] + " " + date.getFullYear();
          </script>
        </p>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->
<!-- </div> -->
<!-- /.content-header -->
<style>
  .main {
    /* z-index: 100; */
    position: absolute;
    top: 150px;
  }
  .bg-img{
    background:url('./dist/logo/logo.png');
    object-fit: cover;
    background-position:cover;
    background-repeat: no-repeat;
    /* background-size: cover; */
    height: 100vh;
    width: 100%;
    position: fixed;
    top: 0;
    opacity: 0.1;

  }
</style>
<!-- Main content -->
<div class="bg-img">
</div>
<div class="container-fluid">
  <div class="row d-flex justify-content-around">
    <div class="col-lg-6 col-md-6 col-sm-6">
      <div class="card">
        <div class="card-header p-2 text-center">
          <h5><strong>Announcment</strong></h5>
        </div>
        <div class="card-body">
          <div class="">
            <div class="d-flex">
              <div class="position-relative px-4">
                <img src="./dist/img/avatar.png" height="60" alt="" class="mw-40 border rounded-circle">
              </div>
              <div class="welcome-data">
                <h5 class="text-primary">Habib Ullah</h5>
                <p class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis quae, voluptates non saepe, placeat ratione beatae quasi architecto assumenda eum eius ad facere labore eligendi? Temporibus at eligendi nesciunt ratione hic ab dolor ad voluptatum, sint nihil accusamus reiciendis omnis.</p>
                <hr>
                <p><strong>Designation</strong></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-4 col">
      <div class="card">
        <div class="card-header p-2 text-center">
          <h5><strong>Leave Quota</strong></h5>
        </div>
        <div class="card-body ">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Leave Type</th>
                <th scope="col">Total</th>
                <th scope="col">Used</th>
                <th scope="col">Balance</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>Compensation</th>
                <td>12</td>
                <td><span class="badge bg-danger">2</span></td>
                <td><span class="badge bg-success">10</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- /.content -->
<?php include "footer.php" ?>