<?php
require_once "connect.php";
if (!empty($_POST)) {
    $id = $_POST['id_user'];
    $ogrnip = $_POST['ogrnip'];
    $name = 'document/' . $_FILES['passport']['name'];
    $passport = $_FILES['passport']['name'];
    move_uploaded_file($_FILES['passport']['tmp_name'], $name);
    $ip = $_POST['ip'];
    $date = date("Y-m-d");
    $request_query = "INSERT INTO `request`(`id_request`, `id_user`, `num_ogrnip`, `passport`, `num_ip`, `date_request`) 
    VALUES (null,'$id','$ogrnip','$passport','$ip','$date')";
    $result_request = mysqli_query($con,$request_query);
    if ($result_request) {
        echo "<script>alert('Заявка отправлена'); location.href = '/personalArea.php';</script>";
    } else {
        echo "<script>alert('Ошибка');</script>";
        echo mysqli_error($con);
    }
}
