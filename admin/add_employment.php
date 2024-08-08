<?php
require_once 'includes/header.php';
require_once 'includes/sidebar.php';
require_once '../config.php';
?>

<div class="content container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between">
        <h1 class="h3 mb-0 text-gray-800">Add Employee</h1>
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
            <li class="breadcrumb-item text-muted">Add Employee</li>
        </ul>
    </div>
</div>
<style>
    .overFlowScroll{
        height: 70vh;
        overflow: scroll;
    }
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-sm-6 col mx-auto">
            <div class="card overFlowScroll">
                <div class="card-header bg-white text-center h4 text-dark">
                    Employment Information
                </div>
                <div class="card-body text-dark">
                    <form action="show_employeement.php" method="post">
                        <div class="form-group">
                            <label for="fullName" class="text-bold">Full Name <span class="text-danger">*</span></label>
                            <input type="text" name="fullName" class="form-control" placeholder="Enter Full Name" id="fullName" required>
                        </div>

                        <div class="form-group">
                            <label for="username">Username <span class="text-danger">*</span></label>
                            <input type="text" name="username" class="form-control" placeholder="Enter Username" id="username" required>
                        </div>

                        <div class="form-group">
                            <label for="employeeCode">Employee Code <span class="text-danger">*</span></label>
                            <input type="text" name="employeeCode" class="form-control" placeholder="Enter Employee Code" id="employeeCode" required>
                        </div>

                        <div class="form-group">
                            <label for="designation">Designation <span class="text-danger">*</span></label>
                            <input type="text" name="designation" class="form-control" placeholder="Enter Designation" id="designation" required>
                        </div>

                        <div class="form-group">
                            <label for="company">Company <span class="text-danger">*</span></label>
                            <input type="text" value="Digicraf Tech" name="company" class="form-control" id="company" required>
                        </div>

                        <div class="form-group">
                            <label for="department">Department <span class="text-danger">*</span></label>
                            <select class="form-control" name="department" id="department" required>
                                <option class="form-control" disabled>Select Department</option>
                                <option class="form-control" value="production">Production</option>
                                <option class="form-control" value="sales">Sales</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="DOF">Date of Joining <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" name="DOF" id="DOF" required>
                        </div>

                        <div class="form-group">
                            <label for="lastQualification">Last Qualification <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="lastQualification" placeholder="Enter Last Qualification" name="lastQualification" required>
                        </div>

                        <div class="form-group">
                            <label for="lastOrganization">Last Organization <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="lastOrganization" placeholder="Enter Last Organization" name="lastOrganization" required>
                        </div>

                        <div class="form-group">
                            <label for="reportsTo">Reports To <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Team Leader" id="reportsTo" name="reportsTo" required>
                        </div>

                        <input type="submit" class="btn web-btn btn-block">
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col mx-auto">
            <div class="card">
                <div class="card-header bg-white text-center h4 text-dark">
                    Employment Persnol Information
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>

<?php include "./includes/footer.php" ?>