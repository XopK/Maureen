<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
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
            <input required class="reg_auth_input" type="text" name="name" placeholder="Имя">
            <input required class="reg_auth_input" type="text" name="surname" placeholder="Фамилия">
            <input required class="reg_auth_input" type="password" name="password" placeholder="Пароль">
            <input required class="reg_auth_input" type="text" name="phone" placeholder="Телефон">
            <input required class="reg_auth_input" type="email" name="email" placeholder="Email">
            <div class="form_but_cent">
                <button class="form_btn">Зарегистрироваться</button>
            </div>
        </form>
    </div>
</body>
</html>