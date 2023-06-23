<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/img/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/style.css">
    <title>Добавить товар</title>
    <style>
        body {
            background: #127369;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    ?>
    <h1 class="addProduct_title">Добавление товара</h1>
    <div class="form_block">
        <form method="POST" action="/addProductDB.php" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $_SESSION['id_user'] ?>">
            <p><label for="name">Название</label></p>
            <input id="name" required class="reg_auth_input" type="text" name="name">
            <p><label for="photo">Фото</label></p>
            <input id="photo" required class="addProduct_file_input" type="file" name="photo">
            <p><label for="description">Описание</label></p>
            <textarea class="textarea_addProduct" name="desc" id="description"></textarea>
            <p><label for="amount">Количество</label></p>
            <input id="amount" required class="reg_auth_input" type="text" name="amount">
            <p><label for="cost">Цена</label></p>
            <input id="cost" required class="reg_auth_input" type="text" name="cost">
            <div class="form_but_cent">
                <button class="form_btn">Добавить</button>
            </div>
            <p style="margin-top: 20px;"><a class="addProduct_back" href="/personalArea.php">Вернуться</a></p>
        </form>
    </div>
</body>

</html>