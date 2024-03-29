<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/itc-slider.css">
    <link rel="shortcut icon" href="/img/icon.ico" type="image/x-icon">
    <script defer src="/js/itc-slider.js"></script>
    <link rel="stylesheet" href="/css/style.css">
    <title>Maureen</title>
</head>

<body>
    <?php
    require_once "connect.php";

    $new_product = "SELECT * FROM `product` ORDER BY `product`.`date_added` DESC LIMIT 10";
    $result_new = mysqli_query($con, $new_product);

    $rand_query = "SELECT * FROM `product` WHERE id_product > 1 ORDER BY rand() LIMIT 1";
    $result_rand = mysqli_fetch_array(mysqli_query($con, $rand_query));

    $rand_query1 = "SELECT * FROM `product` WHERE id_product > 1 ORDER BY rand() LIMIT 1";
    $result_rand1 = mysqli_fetch_array(mysqli_query($con, $rand_query1));
    ?>
    <? include "header.php" ?>
    <div class="main_frame">
        <div class="hero">
            <div class="hero1">
                <div class="hero1_left">
                    <div class="hero1_left_block">
                        <img src="/img/<?= $result_rand['photo_product']; ?> " alt="<?= $result_rand['photo_product']; ?> ">
                    </div>
                    <div class="hero1_right_block">
                        <p class="hero1_right_block_title"><?= $result_rand['name']; ?></p>
                        <p class="hero1_right_block_desc"><?= $result_rand['description']; ?> </span>
                        <p class="hero1_right_block_cost"><?= $result_rand['cost']; ?> ₽</p>
                        <a class="hero1_right_block_btn" href="/product.php?id_catalogue=<?= $result_rand['id_product'] ?>"><img src="/img/cart.svg" alt="cart.svg"></a>
                    </div>
                </div>
                <div class="hero1_right">
                    <img src="/img/<?= $result_rand1['photo_product']?> " alt="<?= $result_rand1['photo_product']?>">
                    <p><?= $result_rand1['cost']?>₽</p>
                </div>
            </div>
            <div class="hero2">
                <h1 class="hero2_title">Новинки</h1>
                <div class="container">
                    <div class="itc-slider" data-slider="itc-slider" data-loop="false" data-autoplay="false">
                        <div class="itc-slider-wrapper">
                            <div class="itc-slider-items">
                                <?
                                while ($new_info = mysqli_fetch_array($result_new)) {
                                ?>
                                    <div class="itc-slider-item">
                                        <a href="/product.php?id_catalogue=<?= $new_info['id_product'] ?>">
                                            <div class="slider_product_card">
                                                <img src="/img/<?= $new_info['photo_product'] ?>" alt="<?= $new_info['photo_product'] ?>">
                                                <p class="slider_cost"><?= $new_info['cost']?>₽</p>
                                            </div>
                                        </a>
                                    </div>
                                <?
                                }
                                ?>
                            </div>
                        </div>
                        <button class="itc-slider-btn itc-slider-btn-prev"></button>
                        <button class="itc-slider-btn itc-slider-btn-next"></button>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $catalog = "SELECT * FROM `product`";
        $result_catalog = mysqli_query($con, $catalog);
        ?>
        <h1 class="catalogue_title">Каталог</h1>
        <div class="catalogue">
            <?
            while ($catalog_info = mysqli_fetch_array($result_catalog)) {
            ?>
                <div class="catalogue_card">
                    <a href="/product.php?id_catalogue=<?= $catalog_info['id_product'] ?>">
                        <div class="catalogue_card_up">
                            <div class="catalogue_img">
                                <img src="/img/<?= $catalog_info['photo_product'] ?>" alt="<?= $catalog_info['photo_product'] ?>">
                            </div>
                        </div>
                        <div class="catalogue_card_down">
                            <p class="catalogue_card_name"><?= $catalog_info['name'] ?></p>
                            <p class="catalogue_card_cost"><?= $catalog_info['cost'] ?>₽</p>
                        </div>
                    </a>
                </div>
            <?
            }
            ?>
        </div>
    </div>

    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function nextSlide() {
            showSlides(slideIndex += 1);
        }

        function previousSlide() {
            showSlides(slideIndex -= 1);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let slides = document.getElementsByClassName("item");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (let slide of slides) {
                slide.style.display = "none";
            }
            slides[slideIndex - 1].style.display = "block";
        }
    </script>
</body>

</html>