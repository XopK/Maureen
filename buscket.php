<?php
session_start();
require_once "connect.php";
$id_user = $_SESSION['id_user'];
if(!empty($_POST)){
    $id_product = $_POST['id_buscket'];
    $count = $_POST['productСount'];
    $dateBas = date("Y-m-d h:m:s");
    $code_query = $_SESSION['order'];
    $insert_prod = "INSERT INTO `order`(`id_order`, `code_order`, `product`, `user`, `adress`, `date_order`, `status`, `count`)
        VALUES (null,'$code_query','$id_product','$id_user','-','$dateBas', 3,'$count')";
    $res_prod = mysqli_query($con, $insert_prod);
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" href="/img/icon.ico" type="image/x-icon">
    <title>Корзина</title>
</head>

<body>
    <? include "header.php" ?>
    <div class="main_frame">
        <h1 class="title_busket">Корзина</h1>
        <table class="table_busket">
            <tr class="tr_busket">
                <th class="th_busket">Товар</th>
                <th class="th_busket">Название</th>
                <th class="th_busket">Цена</th>
                <th class="th_busket">Количество</th>
                <th class="th_busket"></th>
            </tr>
            <?
            $output = "SELECT * FROM `order` JOIN `product` ON order.product = product.id_product where user = '$id_user' and status = 3";
            $output_res = mysqli_query($con, $output);

            while ($info_bus = mysqli_fetch_array($output_res)) {
            ?>
                <tr class="tr_busket">
                    <td class="td_busket"><img src="/img/<?= $info_bus['photo_product'] ?>" alt="<?= $info_bus['photo_product'] ?>"></td>
                    <td class="td_busket"><?= $info_bus['name'] ?></td>
                    <td class="td_busket"><?= $info_bus['cost'] ?>₽</td>
                    <td class="td_busket"><?= $info_bus['count'] ?></td>
                    <td class="td_busket"><a href="/deleteBuscket.php?del=<?= $info_bus['id_order'] ?>"><img src="/img/cancel.svg" alt="cancel.svg"></a></td>
                </tr>
            <?
           
            }
            ?>
        </table>
        <form action="/buscketDB.php" method="post" style= "margin-top:30px;">
            <div class="info_busket">
                <span class="text_busket_info">Доставка</span>
                <form action="/buscketDB.php" method="post">
                <input class="adres_input" type="text" name="adres" placeholder="Адрес" required>
                <span class="text_busket_info">10000₽</span>
                <button class="request_input_but">Оформить</button>
                </form>
                <?
                ?>
            </div>
        </form>
    </div>
</body>

</html>