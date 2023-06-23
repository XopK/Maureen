<?php
session_start();
?>
<header>
    <div class="header_left">
        <a href="/" class="logo_mau">Maureen</a>
    </div>
    <div class="header_center">
        <form method="POST" action="#">
            <div class="search">
                <input class="search_input" type="search" placeholder="Поиск">
                <button class="btn_search"><img src="/img/loupe.png" alt="loupe.png"></button>
            </div>
        </form>
    </div>
    <div class="header_right">
        <a href="/personalArea.php" >
            <div class="personal_area_btn">
                <div class="personal_area_btn_img">
                    <img src="/img/user-wh.png" alt="">
                </div>
                <p><?echo $_SESSION['name']?></p>
            </div>
        </a>
        <!-- <a href="/registration.php" class="btn_header">Регистрация</a>
        <a href="/authorization.php" class="btn_header">Войти</a> -->
        <a href="/logout.php" class="btn_header">Выйти</a>
    </div>
</header>