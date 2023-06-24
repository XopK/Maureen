<?php
session_start();
require_once "connect.php";
if (!empty($_POST)){
    $adres = $_POST['adres'];
    $id_cart = $_SESSION['order'];
    $update = "UPDATE `order` SET `adress`='$adres', `status` = 2 WHERE code_order = '$id_cart'";
    $result_update = mysqli_query($con,$update);

    if($result_update) {
        echo "<script>alert('Заказ оформлен'); location.href = '/';</script>";
    } else {
        echo "<script>alert('Ошибка');</script>";
        echo mysqli_error($con);
    }
}
?>