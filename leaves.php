<?php include "header.php" ?>
<?php include "sidebar.php" ?>
<!-- Content Header (Page header) -->

<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col p-3">
                <h3 class="page-title">Leaves</h3>
                <ul class="breadcrumb bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item text-muted">Leaves</li>
                </ul>
            </div>
            <div class="col-auto float-right m-2">
                <a href="./createLeave.php" class="btn add-btn web-btn"> + Add Leave</a>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="#" class="btn add-btn web-btn"  data-toggle="modal" data-target="#add_leave">Leave Quota</a>
            </div>
        </div>
    </div>
</div>

<!-- <div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col-sm-12 p-2">
                <h3 class="page-title">Profile</h3>
                <ul class="breadcrumb bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">Profile</li>
                </ul>
            </div>
        </div>
    </div>
</div> -->

<div class="container mx-auto">
    <!-- <h1 class="text-center mt-4">Leave Requests</h1> -->
    <table class="table table-striped mt-2">
        <thead>
            <tr>
                <th>Id</th>
                <th>Leave Type</th>
                <th>Reason</th>
                <th>Duration</th>
                <th>From</th>
                <th>To</th>
                <th>Days</th>
                <th>CreatedAt</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>11126</td>
                <td>Casual Leaves</td>
                <td>Due to bad health</td>
                <td>FullDay</td>
                <td>08 Jul 2024 Mon</td>
                <td>08 Jul 2024 Mon</td>
                <td>1</td>
                <td>09 Jul 2024 Tue</td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-success btn-sm" type="button">Approved</button>
                    </div>
                </td>
            </tr>

        </tbody>
    </table>
</div>


<?php include "footer.php" ?>