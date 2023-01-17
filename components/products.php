<div class="products grid">
    <?php
    foreach ($patisseries as $patisserie) { ?>
        <div class="product grid"><img src="<?= $patisserie['img'] ?>" alt="<?= $patisserie['alt_img'] ?>"
                class="product-img">
            <div class="product-meta grid">
                <h2 class="product-title">
                    <?= $patisserie['name'] ?>
                </h2>
                <p class="product-desc"><?= $patisserie['description'] ?></p>
                <ul>
                    <?php
                    $patisseries_price = $DB->selectAll("SELECT price, price_desc FROM products_price WHERE product_id = " . $patisserie['id'] . "");
                    if ($patisseries_price) {
                        foreach ($patisseries_price as $patisserie_price) { ?>
                            <li><?= number_format($patisserie_price['price'], 2, ',', ' ') ?>€<?= $patisserie_price['price_desc'] ?></li>
                        <?php }
                    } ?>
                </ul>
            </div>
        </div>
    <?php } ?>
</div>