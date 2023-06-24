<?php
session_start();
require_once "connect.php";
if(!empty($_POST)){
    $id_use = $_SESSION['id_user'];
    $id_prod = $_POST['id_rev'];
    $comm = $_POST['comment'];
    $date_review = date("d.m.Y");

    $review_add = "INSERT INTO `review`(`id_review`, `comment`, `product`, `user`, `date_review`) VALUES (null,'$comm','$id_prod','$id_use','$date_review')";
    $result = mysqli_query($con,$review_add);

    if ($result) {
        echo "<script>alert('Отзыв оставлен'); location.href = '/product.php?id_catalogue=$id_prod';</script>";
    } else {
        echo "<script>alert('Ошибка');</script>";
        echo mysqli_error($con);
    }
}

?>