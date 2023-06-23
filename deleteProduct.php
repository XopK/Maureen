<?php
    include "connect.php";
    $id = $_GET["product2"];
    $query = "delete from product where id_product= '$id'";
    $result = mysqli_query($con, $query);
    if($result) {
        echo "<script>alert('Успех'); location.href = '/personalArea.php';</script>";
    } else {
        echo "<script>alert('Ошибка');</script>";
        echo mysqli_error($con);
    }
?>