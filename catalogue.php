<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" href="/img/icon.ico" type="image/x-icon">
    <title>Каталог</title>
</head>

<body>
    <?
    include "header.php";
    require_once "connect.php";

    $search = $_POST['search'];
    if (!empty($search)) {
        $catalog = "SELECT * FROM `product` WHERE name LIKE '$search%'";
    } else if (empty($search)) {
        $catalog = "SELECT * FROM `product`";
    }
    $result_catalog = mysqli_query($con, $catalog);
    ?>
    <div class="main_frame">
        <h1 class="catalogue_title">Каталог</h1>
        <div class="catalogue">
            <?
            while ($catalog_info = mysqli_fetch_array($result_catalog)) {
            ?>
                <div class="catalogue_card">
                    <a href="/product.php">
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
</body>

</html>