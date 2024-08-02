<?php include "header.php" ?>
<?php include "sidebar.php" ?>
<style>
    .web-btn {
        background-color: #0a2158;
        color: white;
    }

    .web-btn:hover {
        color: white;
    }
</style>

<div class="content container-fluid ">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col-sm-12 p-3">
                <h3 class="page-title">Change Password</h3>
                <ul class="breadcrumb bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item text-muted">Change Password</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<style>
    .submit-button {
        background-color: #0a2158;
        color: white;
    }
</style>
<div class="container mx-auto col-lg-4">
    <div class="card">
        <div class="card-body">
            <form action="#">
                <div class="form-group">
                    <label for="current_password">Current Password</label>
                    <input type="password" class="form-control" placeholder="Enter current password">
                </div>

                <div class="form-group">
                    <label for="old_password">New Password</label>
                    <input type="password" class="form-control" placeholder="Enter New password">
                </div>

                <div class="form-group">
                    <label for="confirm_password">Current confirm</label>
                    <input type="password" class="form-control" placeholder="Enter confirm password">
                </div>
                <div class="form-group mx-auto">
                    <input type="submit" value="Submit" name="submit" class="btn btn-block web-btn">
                </div>
            </form>
        </div>
    </div>
</div>
<?php include "footer.php" ?>