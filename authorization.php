<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" href="/img/icon.ico" type="image/x-icon">
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
        <form method="POST" action="/authorizationDB.php">
            <p><label for="phone">Телефон</label></p>
            <input id="phone" required class="reg_auth_input" type="text" name="phone" pattern="[0-9]{11}">
            <p><label for="password">Пароль</label></p>
            <input id="password" required class="reg_auth_input" type="password" name="password" maxlength="50" pattern="^(?=^.{8,}$)(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$">
            <div class="form_but_cent">
                <button class="form_btn">Войти</button>
            </div>
        </form>
    </div>
</body>
</html>