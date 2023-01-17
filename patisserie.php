<?php

require("./components/header.php");

if (isset($_GET['page'])) {
    $categorie = $DB->selectOne(
        "SELECT name, price FROM  categorie
        WHERE page_url = '" . strtolower($_GET['page']) . "'"
    );
    if ($categorie) {
        $patisseries = $DB->selectAll(
            "SELECT products.name, products.img, products.description, products.id, products.alt_img, categorie.price FROM products
            INNER JOIN categorie
            ON products.categorie_id = categorie.id
            WHERE categorie.name = '" . $categorie['name'] . "'"
        );
    } else {
        header("location: /404");
        exit;
    }
} else {
    header("location: /404");
    exit;
}

?>

<main>
    <section>
        <div class="categorie">
            <h1 class="categorie-title">
                <?= $categorie['name'] ?>
            </h1><?php
            if ($categorie['price'] > 0) { ?>    <p class="categorie-price">
                    <?= number_format($categorie['price'], 2, ',', ' ') ?>€&ensp;la part
                </p><?php } ?><div class="ruban"></div>
        </div>
        <?php include_once('./components/products.php') ?>
    </section>
</main>

<?php

include_once('./components/foot.php');