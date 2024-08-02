<?php
include "header.php";
include "sidebar.php";
?>

<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col-sm-12 p-3">
                <h3 class="page-title">Daily Attendance</h3>
                <ul class="breadcrumb bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item text-muted">Daily Attendance</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container mx-auto">
    <div class="row">
        <!-- <div class="col-md-12">
            <h3 class="text-center">Attendance</h3>
        </div> -->
        <div class="col-md-4">
            <label for="from">From</label>
            <input type="date" class="form-control" id="from">
        </div>
        <div class="col-md-4">
            <label for="to">To</label>
            <input type="date" class="form-control" id="to">
        </div>
        <div class="col-md-4 mt-auto">
            <button class="btn web-btn" id="search">Search</button>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Time In</th>
                        <th>Time Out</th>
                        <th>Work Shift</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2024 Jul 27 Saturday</td>
                        <td>01:00 PM -- 15 Minutes Late</td>
                        <td>--</td>
                        <td>12:45 TO 9</td>
                    </tr>
                    <tr>
                        <td>2024 Jul 26 Friday</td>
                        <td>12:54 PM -- 9 Minutes Late</td>
                        <td>09:06 PM</td>
                        <td>12:45 TO 9</td>
                    </tr>
                    <tr>
                        <td>2024 Jul 25 Thursday</td>
                        <td>12:55 PM -- 10 Minutes Late</td>
                        <td>09:07 PM</td>
                        <td>12:45 TO 9</td>
                    </tr>
                    <tr>
                        <td>2024 Jul 24 Wednesday</td>
                        <td>12:51 PM -- 6 Minutes Late</td>
                        <td>09:11 PM</td>
                        <td>12:45 TO 9</td>
                    </tr>
                    <tr>
                        <td>2024 Jul 23 Tuesday</td>
                        <td>--</td>
                        <td>09:03 PM</td>
                        <td>12:45 TO 9</td>
                    </tr>
                    <tr>
                        <td>2024 Jul 22 Monday</td>
                        <td>01:26 PM 41 Minutes Late</td>
                        <td>09:00 PM</td>
                        <td>12:45 TO 9</td>
                    </tr>
                    <tr>
                        <td>2024 Jul 21 Sunday</td>
                        <td>--</td>
                        <td>--</td>
                        <td>12:45 TO 9</td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include "footer.php" ?>