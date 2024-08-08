<?php 
require_once 'includes/header.php'; 
require_once 'includes/sidebar.php';
require_once '../config.php';
?>

<div class="content container-fluid">
<div class="d-sm-flex align-items-center justify-content-between">
    <h1 class="h3 mb-0 text-gray-800">Show Employees</h1>
    <a
      href="./add_employment.php"
      class="d-none d-sm-inline-block btn btn-sm web-btn shadow-sm"
      ><i class="fas fa-user-plus fa-sm text-white"></i> Add Details</a
    >
  </div>
  <div class="col-sm-12 p-2">
    <!-- <h3 class="page-title text-dark">Show Employees</h3> -->
    <ul class="breadcrumb bg-transparent">
      <li class="breadcrumb-item"><a href="./admin_dashboard.php">Admin</a></li>
      <!-- <li class="breadcrumb-item"><a href="">Leave</a></li> -->
      <li class="breadcrumb-item text-muted">Show Employees</li>
    </ul>
  </div>
</div>
<div class="container mx-auto">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                <table class="table table-striped text-dark">
                <thead class="text-center table-dark">
                    <tr>
                        <th>User Image</th>
                        <th>username</th>
                        <th>Full Name</th>
                        <th>Employee Code</th>
                        <th>Phone</th>
                        <th>Department</th>
                        <th>Email</th>
                        <th>Reports to</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="../dist/logo/logo.png" height="40" width="48" class="mw-40 rounded-circle" alt="User Image"></td>
                        <td><a href="#">hu1641</a></td>
                        <td>Habib Ullah</td>
                        <td>1641</td>
                        <td>+92 3192476803</td>
                        <td>Production</td>
                        <td>mr.habib42@gmail.com</td>
                        <td>Raheel</td>
                    </tr>
                </tbody>
            </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "./includes/footer.php" ?>