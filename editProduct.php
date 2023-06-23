<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" href="/img/icon.ico" type="image/x-icon">
    <title>Редактировать товар</title>
    <style>
        body{
            background: #127369;
        }
    </style>
</head>
<body>
    <?php
    include "connect.php";
    $id = $_GET['product'];
    $query = "select * from product where id_product = $id";
    $result = mysqli_fetch_array(mysqli_query($con,$query));
    ?>
    <h1 class="addProduct_title">Редактирование товара</h1>
    <div class="form_block">
        <form method="POST" enctype="multipart/form-data" action="/editProductDB.php">
            <input name="id_product" type="hidden" value="<?=$result['id_product']?>">
            <p><label for="name">Название</label></p>
            <input value="<?=$result['name']?>" id="name" class="reg_auth_input" type="text" name="name">
            <p><label for="photo">Фото</label></p>
            <input id="photo" class="addProduct_file_input" type="file" name="photo">
            <p><label for="description">Описание</label></p>
            <textarea class="textarea_addProduct" name="description" id="description"><?=$result['description']?></textarea>
            <p><label for="amount">Количество</label></p>
            <input value="<?=$result['amount']?>" id="amount" class="reg_auth_input" type="text" name="amount">
            <p><label for="cost">Цена</label></p>
            <input value="<?=$result['cost']?>" id="cost" class="reg_auth_input" type="text" name="cost">
            <div class="form_but_cent">
                <button class="form_btn">Редактировать</button>
            </div>
            <p style="margin-top: 20px;"><a class="addProduct_back" href="/personalArea.php">Вернуться</a></p>
        </form>
    </div>
</body>
</html>