<?php
session_start();
$_SESSION['login'] = true;

$valid_email = 'hu1641';
$valid_password = '1234';



if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email === $valid_email && $password === $valid_password) {
        $_SESSION["email"] = $email;
        header('Location: index.php');
        exit;
    } else {
        echo 'Invalid credentials';
    }
}
if (isset($_SESSION['login'])) {
    unset($_SESSION['login']);
    session_destroy();
}
