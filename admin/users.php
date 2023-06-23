<?php
include "./header.php";
require_once "../connect.php";

$seller = "SELECT users.name as name_user, role.name as name_role, surname, phone, email, id_user FROM `users` JOIN `role` on users.role = role.id_role";
$seller_res = mysqli_query($con, $seller);
?>
<div class="container">
    <table class="table caption-top">
        <h2 style="margin: 20px 0 40px 0;">Список пользователей</h2>
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Имя</th>
                <th scope="col">Фамилия</th>
                <th scope="col">Телефон</th>
                <th scope="col">Email</th>
                <th scope="col">Роль</th>
            </tr>
        </thead>
        <tbody>
            <?
            while ($seller_info = mysqli_fetch_array($seller_res)) {
            ?>
                <tr>
                    <th scope="row"><?=$seller_info['id_user']?></th>
                    <td><?=$seller_info['name_user']?></td>
                    <td><?=$seller_info['surname']?></td>
                    <td><?=$seller_info['phone']?></td>
                    <td><?=$seller_info['email']?></td>
                    <td><?=$seller_info['name_role']?></td>
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