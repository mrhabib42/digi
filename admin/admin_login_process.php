<?php
session_start();
$_SESSION['admin_login'] = true;

$valid_email = 'admin';
$valid_password = 'admin';

if (isset($_POST['admin_login'])) {
    $email = $_POST['admin_username'];
    $password = $_POST['admin_password'];

    if ($email === $valid_email && $password === $valid_password) {
        $_SESSION["admin_username"] = $email;
        header('Location: ./index.php');
        exit;
    } else {
        echo "<script>alert('Invalid Credentials...')</script>";
    }
}
print_r($_SESSION["admin_username"]);