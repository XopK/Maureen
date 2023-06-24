<?php
require_once "connect.php";

if (!empty($_POST)) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $addUser = "INSERT INTO `users`(`id_user`, `name`, `surname`, `password`, `phone`, `email`, `role`) 
    VALUES (null,'$name','$surname','$password','$phone','$email', 2)";
    $addUser_Result = mysqli_query($con, $addUser);

    if ($addUser_Result) {
        echo "<script>alert('Регистрация прошла успешно'); location.href = '/';</script>";
    } else {
        echo "<script>alert('Ошибка');</script>";
        echo mysqli_error($con);
    }
}
