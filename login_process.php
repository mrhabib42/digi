<?php
include './config.php';
session_start();
// $valid_email = 'hu1641';
// $valid_password = '1234';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {


    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $query = "SELECT * FROM `create_user` WHERE user_username ='$username';";
    $result = mysqli_query($db_conn, $query);


    if ($result->num_rows == 1) {
        $row = mysqli_fetch_assoc($result);
        if ($password == $row['user_password']) {
        //   if(password_verify($password, $row['user_password'])){
            if ($row['user_role'] == 1111) {
                $_SESSION['user_credentials'] = ["email" => $row['user_username'], "role" => 1111];
                header("Location: ./admin/admin_dashboard.php");
                die();
            } else if ($row['user_role'] == 2222) {
                $_SESSION['user_credentials'] = ["email" => $row['user_username'], "role" => 2222];
                header("Location: user_dashboard.php");
                die();
            }
            else if ($row['user_role'] == 3333) {
                $_SESSION['user_credentials'] = ["email" => $row['user_username'], "role" => 3333];
                header("Location: ceo.php");
                die();
            }
            else if ($row['user_role'] == 4444) {
                $_SESSION['user_credentials'] = ["email" => $row['user_username'], "role" => 4444];
                header("Location: teamleader.php");
                die();
            }else{
                // echo "Invalid User";
            }
        } else {
            echo "password error..";
            // header("Location: index.php");
            // die();
        }
    } else {
        die("Query failed: " . mysqli_error($db_conn));
    }
}
// }

?>