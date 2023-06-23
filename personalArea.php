<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" href="/img/icon.ico" type="image/x-icon">
    <script src="/js/jquery-3.7.0.min.js"></script>
    <title>Личный кабинет</title>
</head>
<?php
require_once "connect.php";
session_start();
$id_user = $_SESSION['id_user'];
$role_user = $_SESSION['role'];
$user_info = "SELECT * FROM `users` WHERE `id_user` = '$id_user'";
$user_result = mysqli_fetch_array(mysqli_query($con, $user_info));
?>
<body>
    <? include "header.php" ?>
    <div class="main_frame">
        <div class="profile">
            <div class="profile_pic">
                <img src="/img/default-user-pic.png" alt="">
            </div>
            <p><?= $user_result['name'] ?></p>
            <p><?= $user_result['surname'] ?></p>
        </div>
        <div class="orders_profile">
            <button id="but_order" class="title_order_profile">
                Заказы
            </button>
            <div class="orders_profile_list1">
                <div class="orders_profile_list2">
                    <div class="order_card">
                        <div class="order_card_left">
                            <div class="order_card_left_img">
                                <img src="/img/309d3d87-10bf-492d-8ac3-b39efca69cd3.jpg" alt="">
                            </div>
                        </div>
                        <div class="order_card_right">
                            <p class="order_card_right_number">Заказ: 2514144264</p>
                            <p class="order_card_right_name">Товар:</p>
                            <p class="order_card_right_text">Количество:</p>
                            <p class="order_card_right_text">Адрес:</p>
                            <p class="order_card_right_status">Статус:</p>
                        </div>
                    </div>
                </div>
            </div>

            <?
            if ($role_user == 2) {
            ?>
                <button id="but_request" class="title_order_profile">
                    Подача заявки
                </button>
                <div class="request_send_form1">
                    <div class="request_send_form2">
                        <form action="/requestDB.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" value="<?=$id_user?>" name = "id_user">
                            <div class="request_input_block">
                                <p><label for="ogrnip">Номер ОГРНИП</label></p>
                                <input class="text_profile_input" id="ogrnip" name="ogrnip" type="text">
                            </div>
                            <div class="request_input_block">
                                <p><label for="passport">Копия паспорта</label></p>
                                <input class="file_profile_input" id="passport" name="passport" type="file">
                            </div>
                            <div class="request_input_block">
                                <p><label for="ip">Номер свидетельства ИП</label></p>
                                <input class="text_profile_input" id="ip" name="ip" type="text">
                            </div>
                            <button class="request_input_but">Отправить</button>
                        </form>
                    </div>
                </div>
            <?
            }
            ?>
            <?
            if ($role_user == 3) {
            ?>
                <button id="but_product" class="title_order_profile">
                    Мои товары
                </button>
                <div class="product_list1">
                    <div class="product_list2">
                        <?
                        $product_seller = "SELECT * FROM `product` WHERE `id_seller` = '$id_user'";
                        $product_result = mysqli_query($con, $product_seller);

                        while ($seller_info = mysqli_fetch_array($product_result)) {
                        ?>
                            <div class="product_card_profile">
                                <div class="product_card_profile_up">
                                    <div class="product_card_profile_up_img">
                                        <img src="/img/<?=$seller_info['photo_product']?>" alt="<?=$seller_info['photo_product']?>">
                                    </div>
                                </div>
                                <div class="product_card_profile_down">
                                    <p><?=$seller_info['name']?></p>
                                    <div class="btn_product_card_profile"><a href="">Редактировать</a></div>
                                    <div class="btn_product_card_profile"><a href="">Удалить</a></div>
                                </div>
                            </div>
                        <?
                        }
                        ?>
                        <a class="card_add_product" href=""><img src="/img/plus-white.svg" alt="plus-white.svg"></a>
                    </div>
                </div>
            <?
            }
            ?>
        </div>
    </div>
    <script>
        $('#but_order').click(function() {
            $(this).parent().find('.orders_profile_list1').slideToggle(250);
        })
        $('#but_request').click(function() {
            $(this).parent().find('.request_send_form1').slideToggle(250);
        })
        $('#but_product').click(function() {
            $(this).parent().find('.product_list1').slideToggle(250);
        })
    </script>
</body>

</html>