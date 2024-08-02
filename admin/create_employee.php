<?php include './includes/header.php' ?>
<?php include './includes/sidebar.php' ?>

<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col-sm-12 p-3">
                <h3 class="page-title text-dark">Create Employee</h3>
                <ul class="breadcrumb bg-transparent">
                    <li class="breadcrumb-item"><a href="./index.php">Admin</a>
                    </li>
                    <!-- <li class="breadcrumb-item"><a href="">Leave</a></li> -->
                    <li class="breadcrumb-item text-muted">Create Employee</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="col-md-4 col-sm-4 col mx-auto ">
    <div class="card">
        <div class="card-body">
            <form action="./admin/leave_confirmation.php" method="post" enctype="">
                <div class="form-group">
                    <label for="from">Username *</label>
                    <input type="text" class="form-control" id="from" placeholder="Enter username" required>
                </div>

                <div class="form-group">
                    <label for="to">Password *</label>
                    <input type="password" class="form-control" placeholder="Enter Password" id="to" required>
                </div>

                <div class="form-group">
                    <label for="formFileSm">Employee Picture</label>
                    <input class="form-control" id="formFileSm" type="file">
                </div>

                <input type="submit" value="Create Employee" class="btn btn-primary btn-block">
        </div>
        </form>
    </div>
</div>






<?php include './includes/footer.php' ?>