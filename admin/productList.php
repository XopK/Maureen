<?php
include "./header.php";
require_once "../connect.php";

$product_admin = "SELECT * FROM `product`";
$product_res = mysqli_query($con, $product_admin);
?>
<div class="container">
    <table class="table caption-top">
        <h2 style="margin: 20px 0 40px 0;">Список товаров</h2>
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Товар</th>
                <th scope="col">Дата добавления</th>
            </tr>
        </thead>
        <tbody>
            <?

            while ($product_info = mysqli_fetch_array($product_res)) {
                $dateB = $product_info['date_added'];
                $newDate = date("d.m.Y h:m:s", strtotime($dateB));
            ?>
                <tr>
                    <th><?= $product_info['id_product'] ?></th>
                    <td><a href="../product.php"><?= $product_info['name'] ?></a></td>
                    <td><?= $newDate ?></td>
                </tr>
            <?
            }
            ?>

        </tbody>
    </table>
</div>
<?php
include "./footer.php";
?>