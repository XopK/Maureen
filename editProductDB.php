<?php
    include "connect.php";
    if(!empty($_POST)){
        $id = $_POST['id_product'];
        if(!empty($_FILES['photo']['tmp_name'])){
            $path = "img/" . $_FILES['photo']['name'];
            $filename = $_FILES['photo']['name'];
        }else{
            $query = "select * from product where id_product = $id";
            $photo = mysqli_fetch_array(mysqli_query($con,$query));
            $filename = $photo['photo_product'];
        }
        $name = $_POST["name"];
        $description = $_POST["description"];
        $amount = $_POST["amount"];
        $cost = $_POST["cost"];
        $product_query = "update product set name = '$name',photo_product = '$filename',description = '$description',amount = '$amount',cost = '$cost' where id_product = '$id'";
        $result_request = mysqli_query($con,$product_query);
        if($result_request) {
            echo "<script>alert('Успех'); location.href = '/personalArea.php';</script>";
            move_uploaded_file($_FILES['photo']['tmp_name'], $path);
        } else {
            echo "<script>alert('Ошибка');</script>";
            echo mysqli_error($con);
        }
    }
?>