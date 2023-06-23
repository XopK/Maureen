<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Корзина</title>
</head>
<body>
    <?include "header.php"?>
    <div class="main_frame">
        <h1>Корзина</h1>
        <table class="table_busket">
            <tr>
                <th class="th_busket">Товар</th>
                <th class="th_busket">Название</th>
                <th class="th_busket">Цена</th>
                <th class="th_busket">Количество</th>
            </tr>
            <tr>
                <td><img src="/img/309d3d87-10bf-492d-8ac3-b39efca69cd3.jpg" alt=""></td>
                <td>Кофе</td>
                <td>500 руб.</td>
                <td>
                    <input class="input_count" type="text" name="productСount" value="1">
                </td>
                <td><a href=""><img src="/img/cancel.svg" alt="cancel.svg"></a></td>
            </tr>
        </table>
    </div>
</body>
</html>