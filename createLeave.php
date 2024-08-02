<?php include "header.php" ?>
<?php include "sidebar.php" ?>

<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col-sm-12 p-3">
                <h3 class="page-title">Create Leave</h3>
                <ul class="breadcrumb bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Leave</a></li>
                    <li class="breadcrumb-item text-muted">Add Leave</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container mx-auto">
    <div class="row">
        <div class="col-md-6 col-sm-6 col mx-auto">
            <form action="./admin/leave_confirmation.php" method="post">
                <div class="form-group">
                    <label for="leaveType">Leave Type *</label>
                    <select class="form-control" id="leaveType" required>
                        <option value="casualLeaves">Casual Leave</option>
                        <option value="compensationLeave">Compensation Leave</option>
                        <option value="medicalLeave">Medical Leave</option>
                        <option value="specialLeave">Special Leave</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="reason">Reason *</label>
                    <textarea class="form-control" id="reason" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="duration">Duration *</label>
                    <select class="form-control" id="duration" required>
                        <option value="fullDay">Full Day</option>
                        <!-- <option value="halfDay">Half Day</option> -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="from">From *</label>
                    <input type="date" class="form-control" id="from" required>
                </div>
                <div class="form-group">
                    <label for="to">To *</label>
                    <input type="date" class="form-control" id="to" required>
                </div>
                <div class="form-group">
                    <label for="alternateContact">Alternate Employee/Contact</label>
                    <input type="text" class="form-control" id="alternateContact">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" rows="3"></textarea>
                </div>
                <input type="submit" class="btn btn-primary btn-block">
        </div>
        </form>
        <div class="col-md-5 col-sm-5  col">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Leave Quota</h5>
                </div>
                <div class="card-body">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>Leave Type</th>
                                <th>Total</th>
                                <th>Used</th>
                                <th>Balance</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Compensation Leave</td>
                                <td><span>12</span></td>
                                <td><span class="badge badge-danger">2</span></td>
                                <td><span class="badge badge-success">10</span></td>
                            </tr>
                            <tr>
                                <td>Casual Leaves</td>
                                <td>7</td>
                                <td><span class="badge badge-danger">0</span></td>
                                <td><span class="badge badge-success">7</span></td>
                            </tr>
                            <tr>
                                <td>Medical Leave (Unpaid unless Approved)</td>
                                <td>7</td>
                                <td><span class="badge badge-danger">0</span></td>
                                <td><span class="badge badge-success">7</span></td>
                            </tr>
                            <tr>
                                <td>Special Leave</td>
                                <td>3</td>
                                <td><span class="badge badge-danger">0</span></td>
                                <td><span class="badge badge-success">3</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include "footer.php" ?>