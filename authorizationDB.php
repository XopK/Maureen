<?php
session_start();
require_once "connect.php";

if (!empty($_POST)) {
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $login = "SELECT * FROM `users` WHERE `phone` = '$phone' AND `password` = '$password'";
    $login_result = mysqli_query($con, $login);
    $login_session = mysqli_fetch_array($login_result);

    if ($login_result) {
        echo "<script>alert('Успех'); location.href = '/';</script>";
        $_SESSION['id_user'] = $login_session['id_user'];
        $_SESSION['role'] = $login_session['role'];
        $_SESSION['name'] = $login_session['name'];
    } else {
        echo "<script>alert('Ошибка');</script>";
        echo mysqli_error($con);
    }
}
