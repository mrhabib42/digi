<?php include_once './includes/config.php' ?>
<?php include './includes/header.php' ?>
<?php include './includes/sidebar.php' ?>

<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col-sm-12 p-3">
                <h3 class="page-title text-dark">Show Employees</h3>
                <ul class="breadcrumb bg-transparent">
                    <li class="breadcrumb-item"><a href="./index.php">Admin</a>
                    </li>
                    <!-- <li class="breadcrumb-item"><a href="">Leave</a></li> -->
                    <li class="breadcrumb-item text-muted">Show Employee</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="card">
        <div class="card-body">
            <!-- <h5 class="card-title">All Users <span>| Information</span></h5> -->

            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">User Image</th>
                        <th scope="col">User Id</th>
                        <th scope="col">User Name</th>

                    </tr>
                </thead>
                <tbody>

                    <?php

                    $query = "SELECT * FROM tbl_user_create";
                    $res = mysqli_query($db_conn, $query);
                    while ($row = mysqli_fetch_assoc($res)) { ?>

                        <tr>
                            <td><img src="../uploads/<?= $row['user_img']?>" height="50" width="48" class="mw-40 border rounded-circle"  alt="User Image"></td>
                            <td><?= $row['id'] ?></td>
                            <td><a href="#"><?= $row['user_username'] ?></a></td>
                        </tr>
                        <?php print_r($row['user_img'])?>

                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>
</div>



<?php include './includes/footer.php' ?>