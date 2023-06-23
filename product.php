<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Товар</title>
</head>
<body>
    <?include "header.php"?>
    <div class="main_frame">
        <div class="product_frame">
            <div class="product_frame_left">
                <img src="/img/309d3d87-10bf-492d-8ac3-b39efca69cd3.jpg" alt="">
            </div>
            <div class="product_frame_right">
                <p class="product_frame_title">Кофе "Jacobs"</p>
                <p class="product_frame_cost">500₽</p>
                <div class="count">
                    <span class="change minus min">
                        <img src="/img/minus.png" alt="minus.png">
                    </span>
                    <input class="input_count" type="text" name="productСount" value="1" disabled="">
                    <span class="change plus">
                        <img src="/img/plus.png" alt="plus.png">
                    </span>
                    <span class="count_end">Количество: 100</span>
                </div>
                <div class="product_frame_but">
                    <button class="product_but_left">В корзину</button>
                </div>
                <div class="product_seller">
                    <div class="product_seller_photo"><img src="/img/user.png" alt=""></div>
                    <div>
                        <p>Продавец:</p>
                        <p>Плюшки</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="product_description_block">
            <h1 class="product_description_title">Описание</h1>
            <p class="product_description">В 1895 году знаток кофе Йохан Якобс открыл свою первую кофейную фабрику – Jacobs Coffee Roastery. Йохан привозил людям кофе в зёрнах самого высокого качества. Он вложил всю свою страсть и мастерство обжарки кофейных зёрен в создание бленда, который раскрывал всё богатство вкуса и аромата кофе.Сохраняя традиции отбора кофейных зёрен самого высокого качества и мастерства обжарки с 1895 года, Jacobs Monarch и сегодня дарит богатый насыщенный вкус и аромат кофе его ценителям.</p>
        </div>
        <?php
        include "connect.php";
        $query = "select * from review";
        ?>
        <div class="product_reviews_block">
            <h1 class="product_reviews_title">Отзывы</h1>
            <?if(isset($_SESSION['id_user'])){?>
            <form action="review.php">
            <div class="review_answer">  
                    <input placeholder="Оставьте отзыв!" type="text">
                    <button><img src="/img/plus-white.svg" alt="plus-white.svg"></button>
            </div>
            </form>
            <?}?>
            <div class="review_block">
                <div class="review_img"><img src="/img/user.png" alt=""></div>
                <div class="review_block_text">
                    <h1 class="review_name">Иванов И.</h1>
                    <p class="review_text">Очень вкусный кофе. Доставили быстро</p>
                </div>
                <div class="review_date"><p>11.09.2001</p></div>
            </div>
        </div>
    </div>
    <script>
        document.querySelectorAll('.count .plus').forEach(item => {
            item.addEventListener('click', function () {
                ++item.parentElement.querySelector('.input_count').value;
                if (item.parentElement.querySelector('.input_count').value > 1) {
                    item.parentElement.querySelector('.minus').classList.remove('min');
                }
            });
        });
        document.querySelectorAll('.count .minus').forEach(item => {
            item.addEventListener('click', function () {
                --item.parentElement.querySelector('.input_count').value;
                if (item.parentElement.querySelector('.input_count').value < 2) {
                    item.parentElement.querySelector('.input_count').value = 1
                    item.classList.add('min');
                }
            });
        });
    </script>
</body>
</html>