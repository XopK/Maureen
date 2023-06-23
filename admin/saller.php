<?php
include "./header.php";
require_once "../connect.php";

$seller = "SELECT * FROM `users` WHERE `role` = 3";
$seller_res = mysqli_query($con, $seller);
?>
<div class="container">
    <table class="table caption-top">
        <h2 style="margin: 20px 0 40px 0;">Список продавцов</h2>
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Имя</th>
                <th scope="col">Фамилия</th>
                <th scope="col">Телефон</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            <?
            while ($seller_info = mysqli_fetch_array($seller_res)) {
            ?>
                <tr>
                    <th scope="row"><?=$seller_info['id_user']?></th>
                    <td><?=$seller_info['name']?></td>
                    <td><?=$seller_info['surname']?></td>
                    <td><?=$seller_info['phone']?></td>
                    <td><?=$seller_info['email']?></td>
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