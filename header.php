<?php
session_start();
?>
<header>
    <div class="header_left">
        <a href="/" class="logo_mau">Maureen</a>
    </div>
    <div class="header_center">
        <form method="POST" action="/catalogue.php">
            <div class="search">
                <input class="search_input" type="search" placeholder="Поиск" name = "search">
                <button class="btn_search"><img src="/img/loupe.png" alt="loupe.png"></button>
            </div>
        </form>
    </div>
    <div class="header_right">
        <?
        if (isset($_SESSION['id_user'])) {
            if ($_SESSION['role'] == 1) {
        ?>
                <a class="btn_with_auth" href="/admin/">
                    <div class="personal_area_btn">
                        <div class="personal_area_btn_img">
                            <img src="/img/user-wh.png" alt="">
                        </div>
                        <p><? echo $_SESSION['name'] ?></p>
                    </div>
                </a>
            <?
            }else{
                ?>
            <a class="btn_with_auth" href="/personalArea.php">
                <div class="personal_area_btn">
                    <div class="personal_area_btn_img">
                        <img src="/img/user-wh.png" alt="">
                    </div>
                    <p><? echo $_SESSION['name'] ?></p>
                </div>
            </a>
            <a class="btn_with_auth" href="buscket.php">
                <div class="personal_area_btn">
                    <div class="personal_area_btn_img">
                        <img src="/img/cart.svg" alt="">
                    </div>
                    <p>Корзина</p>
                </div>
            </a>
            <?
            }
            ?>
            <a class="btn_with_auth" href="/logout.php">
                <div class="personal_area_btn">
                    <div class="personal_area_btn_img">
                        <img src="/img/logout.png" alt="logout.png">
                    </div>
                    <p>Выйти</p>
                </div>
            </a>
        <?
        } else {
        ?>
            <a href="/registration.php" class="btn_header">Регистрация</a>
            <a href="/authorization.php" class="btn_header">Войти</a>
        <?

        }
        ?>
    </div>
</header>