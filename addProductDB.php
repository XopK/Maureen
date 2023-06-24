<?php
require_once "connect.php";
if(!empty($_POST)){
    $id = $_POST['id'];
    $name = $_POST['name'];
    if(!empty($_FILES['photo']['tmp_name'])){
        $path = "img/" . $_FILES['photo']['name'];
        $filename = $_FILES['photo']['name'];
    }
    $desc = $_POST['desc'];
    $amount = $_POST['amount'];
    $cost = $_POST['cost'];
    $date = date("Y-m-d H:i:s");
    $product_query = "INSERT INTO `product`(`id_product`, `name`, `photo_product`, `description`, `amount`, `cost`, `id_seller`, `date_added`) VALUES (null,'$name','$filename','$desc','$amount','$cost','$id','$date')";
    $result_request = mysqli_query($con,$product_query);
    if ($result_request) {
        echo "<script>alert('Товар добавлен'); location.href = '/personalArea.php';</script>";
        move_uploaded_file($_FILES['photo']['tmp_name'], $path);
    } else {
        echo "<script>alert('Ошибка');</script>";
        echo mysqli_error($con);
    }
}
?>