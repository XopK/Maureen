<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" href="/img/icon.ico" type="image/x-icon">
    <title>Корзина</title>
</head>
<body>
    <?include "header.php"?>
    <div class="main_frame">
        <h1 class="title_busket">Корзина</h1>
        <table class="table_busket">
            <tr class="tr_busket">
                <th class="th_busket">Товар</th>
                <th class="th_busket">Название</th>
                <th class="th_busket">Цена</th>
                <th class="th_busket">Количество</th>
                <th class="th_busket"></th>
            </tr>
            <tr class="tr_busket">
                <td class="td_busket"><img src="/img/309d3d87-10bf-492d-8ac3-b39efca69cd3.jpg" alt=""></td>
                <td class="td_busket">Кофе</td>
                <td class="td_busket">500 руб.</td>
                <td class="td_busket">
                    <input maxlength="3" required class="input_count_busket" type="text" pattern="[0-9]{1,3}" name="productСount" value="1">
                </td>
                <td class="td_busket"><a href=""><img src="/img/cancel.svg" alt="cancel.svg"></a></td>
            </tr>
        </table>
        <div class="info_busket">
            <span class="text_busket_info">Доставка</span>
            <input class="adres_input" type="text" name="adres">
            <span class="text_busket_info">Итого: 2500</span>
            <button class="request_input_but">Оформить</button>
        </div>
    </div>
</body>
</html>