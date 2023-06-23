<?php
session_start();
require_once "connect.php";

if (!empty($_POST)) {
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $login = "SELECT * FROM `users` WHERE `phone` = '$phone' AND `password` = '$password'";
    $login_result = mysqli_fetch_array(mysqli_query($con, $login));

    if ($login_result) {
        echo "<script>alert('Успех'); location.href = '/';</script>";
        $_SESSION['id_user'] = $login_result['id_user'];
        $_SESSION['role'] = $login_reslt['role'];
        $_SESSION['name'] = $login_result['name'];
    } else {
        echo "<script>alert('Ошибка');</script>";
        echo mysqli_error($con);
    }
}
