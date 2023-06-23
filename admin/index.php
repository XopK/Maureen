<?php
include "./header.php";
require_once "../connect.php";

$request_query = "SELECT * FROM `request` JOIN `users` ON request.id_user = users.id_user";
$query_result = mysqli_query($con, $request_query);
?>
<div class="container">
    <table class="table caption-top">
        <h2 style="margin: 20px 0 40px 0;">Список заявок</h2>
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Пользователь</th>
                <th scope="col">Номер ОГРНИП</th>
                <th scope="col">Паспорт</th>
                <th scope="col">Номер ИП</th>
                <th scope="col">Дата подачи</th>
            </tr>
        </thead>
        <tbody>
            <?
            
            while ($info_req = mysqli_fetch_array($query_result)) {
                $dateB = $info_req['date_request'];
                $newDate = date("d.m.Y", strtotime($dateB));
            ?>
                <tr>
                    <th scope="row"><?=$info_req['id_request']?></th>
                    <td><?=$info_req['name']?> <?=$info_req['surname']?></td>
                    <td><?=$info_req['num_ogrnip']?></td>
                    <td><a href="../document/<?=$info_req['passport']?>" download="filename"><?=$info_req['passport']?></a></td>
                    <td><?=$info_req['num_ip']?></td>
                    <td><?=$newDate?></td>
                    <td><a href="" type="button" class="btn btn-success btn-sm">Принять</a></td>
                    <td><a href="" type="button" class="btn btn-danger btn-sm">Отклонить</a></td>
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