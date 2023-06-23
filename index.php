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
    <?include "header.php"?>
    <div class="main_frame">
        <div class="hero">
            <div class="hero1">
                <div class="hero1_left">
                    <div class="hero1_left_block">
                        <img src="/img/6526591210.webp" alt="uou">
                    </div>
                    <div class="hero1_right_block">
                        <p class="hero1_right_block_title">Мягкая игрушка ”Большой русский кот ШЛЁПА”</p>
                        <p class="hero1_right_block_desc">Игрушки нашего бренда производятся в РОССИИ в городе ИВАНОВО. Все материалы безопасны для здоровья и сертифицированы для детей старше трех лет. </span>
                        <p class="hero1_right_block_cost">1500₽</p>
                        <a class="hero1_right_block_btn" href=""><img src="/img/cart.svg" alt="cart.svg"></a>
                    </div>
                </div>
                <div class="hero1_right">
                    <img src="/img/6442355251.webp" alt="adas">
                    <p>1200₽</p>
                    <span>2000₽</span>
                </div>
            </div>
            <div class="hero2">
                <h1 class="hero2_title">Новинки</h1>
                <div class="container">
                    <div class="itc-slider" data-slider="itc-slider" data-loop="false" data-autoplay="false">
                        <div class="itc-slider-wrapper">
                            <div class="itc-slider-items">
                                <div class="itc-slider-item">
                                    <div class="slider_product_card">
                                        <img src="/img/6587251346.webp" alt="">
                                        <p class="slider_cost">500₽</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="itc-slider-btn itc-slider-btn-prev"></button>
                        <button class="itc-slider-btn itc-slider-btn-next"></button>
                    </div>
                </div>
            </div>
        </div>
        <h1 class="catalogue_title">Каталог</h1>
        <div class="catalogue">
            <div class="catalogue_card">
                <div class="catalogue_img">
                    <img src="/img/309d3d87-10bf-492d-8ac3-b39efca69cd3.jpg" alt="">
                </div>
                <p class="catalogue_card_name">Кофе "Jacobs"</p>
                <div class="catalogue_card_cb">
                    <p class="catalogue_card_cost">500₽</p>
                    <a class="catalogue_card_btn" href="/product.php"><img src="/img/cart.svg" alt="cart.svg"></a>
                </div>
            </div>
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