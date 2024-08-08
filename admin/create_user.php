<?php include './includes/header.php' ?>
<?php include './includes/sidebar.php' ?>
<?php include '../config.php' ?>

<?php
if (isset($_POST['submit'])) {
    $user_username = $_POST['user_username'];
    $user_password = $_POST['user_password'];
    $user_role = $_POST['role'];
    $user_img = $_FILES['user_img']['name'];

    $target_directory = "../uploads/";
    $imageFileType = strtolower(pathinfo($_FILES["user_img"]["name"], PATHINFO_EXTENSION));

    // Generate a unique name for the file before saving it
    $unique_name = uniqid() . "." . $imageFileType;
    $target_file = $target_directory . $unique_name;
    $uploadOk = 1;

    // Check if the file type is allowed
    if ($imageFileType != "jpg" && $imageFileType != "gif" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo "Sorry, only JPG, JPEG, GIF & PNG files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // Try to upload the file
        if (move_uploaded_file($_FILES['user_img']["tmp_name"], $target_file)) {
            // Insert into the database with the unique file name
            $query = "INSERT INTO `create_user`(`user_username`, `user_password`, `user_img` , `user_role`) 
                      VALUES ('$user_username','$user_password','$unique_name','$user_role')";

            if (mysqli_query($db_conn, $query)) {
                $_SESSION['success-msg'] = "User has been created successfully";
                echo "<script>location.href='./show_users.php'</script>";
                exit;
            } else {
                echo "Database insertion failed: " . mysqli_error($db_conn);
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>

<div class="content container-fluid">
<div class="d-sm-flex align-items-center justify-content-between">
    <h1 class="h3 mb-0 text-gray-800">Create User</h1>
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
      <li class="breadcrumb-item text-muted">Create User</li>
    </ul>
  </div>
</div>
<div class="col-md-4 col-sm-4 col mx-auto ">
    <div class="card">
        <div class="card-body">
            <form action="#" method="post" class="text-dark" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="from">Username <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="user_username" id="from" placeholder="Enter username" required>
                </div>

                <div class="form-group">
                    <label for="to">Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" name="user_password" id="to" placeholder="Enter Password" required>
                </div>

                <div class="form-group">
                    <label for="formFileSm">User Picture <span class="text-danger">*</span></label>
                    <input type="file" class="form-control" name="user_img" id="formFileSm">
                </div>

                <div class="form-group">
                    <label for="userRole">User Role <span class="text-danger">*</span></label>
                    <select name="role" id="userRole" class="form-control">
                        <option value="1111">Admin</option>
                        <option value="2222">User</option>
                        <option value="3333">CEO</option>
                        <option value="4444">Team Leader</option>
                    </select>
                </div>

                <button type="submit" name="submit" class="btn web-btn btn-block">Create Employee</button>
            </form>
        </div>
    </div>
</div>






<?php include './includes/footer.php' ?>