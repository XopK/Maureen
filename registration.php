<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" href="/img/icon.ico" type="image/x-icon">
    <title>Регистрация</title>
    <style>
        body{
            background: #127369;
        }
    </style>
</head>
<body>
    <?include "header.php"?>
    <h1 class="reg_title">Регистрация</h1>
    <div class="form_block">
        <form method="POST" action="/registrationDB.php">
            <p><label for="name">Имя</label></p>
            <input id="name" required class="reg_auth_input" type="text" name="name">
            <p><label for="surname">Фамилия</label></p> 
            <input id="surname" required class="reg_auth_input" type="text" name="surname">
            <p><label for="password">Пароль</label></p>
            <input id="password" required class="reg_auth_input" type="password" name="password">
            <p><label for="phone">Телефон</label></p>
            <input id="phone" required class="reg_auth_input" type="text" name="phone">
            <p><label for="email">Email</label></p>
            <input id="email" required class="reg_auth_input" type="email" name="email">
            <div class="form_but_cent">
                <button class="form_btn">Зарегистрироваться</button>
            </div>
        </form>
    </div>
</body>
</html>