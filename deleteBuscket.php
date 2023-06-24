<?php
require_once "connect.php";

$del_id = !empty($_GET['del']) ? $_GET['del'] : false;
$delete = "DELETE FROM `order` WHERE id_order = '$del_id'";

$del_res = mysqli_query($con, $delete);

if ($del_res) {
    echo "<script>location.href = '/buscket.php';</script>";
} else {
    echo "<script>alert('Ошибка');</script>";
    echo mysqli_error($con);
}
?>