<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Авторизация</title>
    <style>
        body{
            background: #127369;
        }
    </style>
</head>
<body>
    <?include "header.php"?>
    <h1 class="auth_title">Авторизация</h1>
    <div class="form_block">
        <form method="POST" action="">
            <input required class="reg_auth_input" type="text" name="phone" placeholder="Телефон">
            <input required class="reg_auth_input" type="password" name="password" placeholder="Пароль">
            <div class="form_but_cent">
                <button class="form_btn">Войти</button>
            </div>
        </form>
    </div>
</body>
</html>