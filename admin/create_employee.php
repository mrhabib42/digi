<?php include './includes/header.php' ?>
<?php include './includes/sidebar.php' ?>
<?php include './includes/config.php' ?>

<?php
if (isset($_POST['submit'])) {
    $user_username = $_POST['user_username'];
    $user_password = $_POST['user_password'];
    $user_img = $_FILES['user_img']['name'];


    $target_directory = "../uploads/";
    $target_file = $target_directory . basename($_FILES["user_img"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $uploadOk = 1;

    if ($imageFileType != "jpg" && $imageFileType != "gif" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo "Sorry, only JPG, JPEG, GIF & PNG files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry Your File was not Uploaded";
    } else {
        if (move_uploaded_file($_FILES['user_img']["tmp_name"], $target_file)) {
            mysqli_query($db_conn, "INSERT INTO `tbl_user_create`(`user_username`, `user_password`, `user_img`) 
            VALUES ('$user_username','$user_password','$user_username')");

            $_SESSION['success-msg'] = "Employee has been created successfully";
            echo "<script>location.href='./show_employees.php'</script>";

            exit;
        }
        else{
            echo "Sorry, there was an error uploading your file.";
        }
    }
    // $tempname = $_FILES['user_img']['tmp_name'];
    // $folder = '../uploads' . $user_img;
    // $imgName = $user_username;

    // move_uploaded_file($user_img['tmp_name'], '../uploads/' . $imgName);
}
// print_r($tempname);

?>



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
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="from">Username *</label>
                    <input type="text" class="form-control" name="user_username" id="from" placeholder="Enter username" required>
                </div>

                <div class="form-group">
                    <label for="to">Password *</label>
                    <input type="password" class="form-control" name="user_password" placeholder="Enter Password" id="to" required>
                </div>

                <div class="form-group">
                    <label for="formFileSm">Employee Picture</label>
                    <input type="file" class="form-control" name="user_img" id="formFileSm">
                </div>

                <button type="submit" name="submit" class="btn btn-primary btn-block">Create Employee</button>
        </div>
        </form>
    </div>
</div>






<?php include './includes/footer.php' ?>