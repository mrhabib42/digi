<?php include './includes/header.php' ?>
<?php include './includes/sidebar.php' ?>

<div class="content container-fluid">
<div class="d-sm-flex align-items-center justify-content-between">
    <h1 class="h3 mb-0 text-gray-800">Leave Confirmation</h1>
    <!-- <a
      href="#"
      class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"
      ><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a
    > -->
  </div>
  <div class="col-sm-12 p-2">
    <!-- <h3 class="page-title text-dark">Show Employees</h3> -->
    <ul class="breadcrumb bg-transparent">
      <li class="breadcrumb-item"><a href="./admin_dashboard.php">Admin</a></li>
      <!-- <li class="breadcrumb-item"><a href="">Leave</a></li> -->
      <li class="breadcrumb-item text-muted">Leave Confirmation</li>
    </ul>
  </div>
</div>

<div class="container-fluid mx-auto">
    <div class="row mt-4">
        <div class="col-md-12">
            <table class="table table-striped text-dark ">
                <thead class="table-dark">
                    <tr>
                        <th>username</th>
                        <th>Name</th>
                        <th>Leave ID</th>
                        <th>Leave Type</th>
                        <th class="text-center">Reason</th>
                        <th>Duration</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Days</th>
                        <th>Created at</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>hu1641</td>
                        <td>Hunain</td>
                        <td>78667</td>
                        <td>Casual </td>
                        <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus aperiam ea eum quaerat dignissimos, praesentium, quae ad soluta sint ipsum consequatur animi inventore. Nisi eum ducimus nemo ipsum deserunt dicta.</td>
                        <td>8</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    

                </tbody>
            </table>
        </div>
    </div>
</div>





<?php include './includes/footer.php' ?>