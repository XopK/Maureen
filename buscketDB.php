<?php
if (!empty($_POST)){
    $adres = $_POST['adres'];
    $code = rand(1000, 99999);

    $update = "UPDATE `order` SET `code_order`='$code',`adress`='$adres' WHERE id_order = "
}
?>