<?php
require_once "../connect.php";
$no = !empty($_GET['no']) ? $_GET['no'] : false;
$yes = !empty($_GET['yes']) ? $_GET['yes'] : false;
$id_user = "SELECT * FROM `request` WHERE id_request = $yes";
$res_user = mysqli_fetch_array(mysqli_query($con,$id_user));
$id = $res_user['id_user'];
if(isset($no) || isset($yes)){
    if(!empty($no)){
        $query_no = "DELETE FROM `request` WHERE id_request = '$no'";
        $no_result = mysqli_query($con,$query_no);
    }else{
        $query_yes = "UPDATE `users` SET `role`= 3 WHERE id_user = '$id'";
        $yes_result = mysqli_query($con,$query_yes);
        $delete_req = "DELETE FROM `request` WHERE id_request = '$yes'";
        $delete_result = mysqli_query($con,$delete_req);
    }
    if ($no_result || $yes_result || $delete_result) {
        echo "<script>alert('Успех'); location.href = '/admin';</script>";
    } else {
        echo "<script>alert('Ошибка');</script>";
    }
}
?>