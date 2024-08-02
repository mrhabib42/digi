<?php include "header.php";
if (!isset($_SESSION["email"])) {
  header('Location: login.php');
}
?>
<?php include "sidebar.php" ?>
<!-- Content Header (Page header) -->
<!-- <div class="content-header"> -->
<div class="container-fluid">
  <div class="card p-4" style="height:100px">
    <div class="d-flex">
      <div class="welcome-img px-4">
        <img src="./dist/img/avatar.png" class="img-fluid rounded-circle" height="0" width="60" alt="user-profile">
      </div>
      <div class="welcome-data">
        <h4><?= $_SESSION['email'] ?></h4>
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
      <div class="buttons p-4">
        <button id="startButton" class="btn btn-success">Sign In</button>
        <button id="stopButton" class="btn btn-danger">Sign Out</button>
        <span id="timer" class="">00:00:00</span>
        <script>
          let timerInterval;
          let seconds = 0;

          function updateTimerDisplay() {
            const hours = String(Math.floor(seconds / 3600)).padStart(2, '0');
            const minutes = String(Math.floor((seconds % 3600) / 60)).padStart(2, '0');
            const secs = String(seconds % 60).padStart(2, '0');
            document.getElementById('timer').textContent = `${hours}:${minutes}:${secs}`;
          }

          document.getElementById('startButton').addEventListener('click', () => {
            if (!timerInterval) {
              timerInterval = setInterval(() => {
                seconds++;
                updateTimerDisplay();
              }, 1000);
            }
          });

          document.getElementById('stopButton').addEventListener('click', () => {
            clearInterval(timerInterval);
            timerInterval = null;
            // Save the recorded time to the database
            saveTimeToDatabase(seconds);
          });

          function saveTimeToDatabase(timeInSeconds) {
            fetch('save_time.php', {
                method: 'POST',
                headers: {
                  'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                  time: timeInSeconds
                }),
              })
              .then(response => response.json())
              .then(data => {
                console.log('Time saved:', data);
              })
              .catch((error) => {
                console.error('Error saving time:', error);
              });
          }
        </script>
      </div>
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