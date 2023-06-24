<?php
session_start();
require_once "connect.php";

if (!empty($_POST)) {
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $login = "SELECT * FROM `users` WHERE `phone` = '$phone' AND `password` = '$password'";
    $login_result = mysqli_fetch_array(mysqli_query($con, $login));

    if ($login_result) {
        $_SESSION['id_user'] = $login_result['id_user'];
        $_SESSION['role'] = $login_result['role'];
        $_SESSION['name'] = $login_result['name'];
        $code_cart = rand(1000, 99999);
        $_SESSION['order'] = $code_cart;
        if ($_SESSION['role'] == 1) {
            echo "<script>location.href ='/admin'</script>";
        } else {
            echo "<script>alert('Вы успешно авторизировались'); location.href = '/';</script>";
        }
    } else {
        echo "<script>alert('Ошибка'); location.href = '/authorization.php';</script>";
    }
}
