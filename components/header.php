<?php
require("./config/dbClass.php");
$url = $_SERVER['REQUEST_URI'];
$url = substr($url, 1);
$url = $DB->selectOne("SELECT name FROM categorie WHERE page_url = '" . $url . "'"); ?>
<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/loader.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="shortcut icon" href="./assets/img/logosylsyl_responsive.png" type="image/x-icon">
    <meta name="description"
        content="Pâtisserie artisanale situé à montréal en Ardèche, France. Les pâtisseries sont réalisées essentiellement sur commande, un délai de 3 jours minimum est souhaité." />
    <title>Sylvie,biscuits et cie|<?= ucfirst($url['name']) ?></title>
</head>

<body>
    <div id="loader"><span id="loader_background"></span><img src="./assets/img/logosylsyl_responsive.png" alt=""
            class="loader-img" />
        <div class="bt-spinner"></div>
    </div>
    <header>
        <nav><a href="/" class="logo">SYLVIE,BISCUITS ET CIE</a><input type="radio" name="slider" id="menu-btn" /><input
                type="radio" name="slider" id="close-btn" />
            <ul class="nav_links"><label for="close-btn" class="btn close-btn"><i class="fa-solid fa-xmark"></i></label>
                <li><a href="#" class="desktop_item link">Pâtisserie</a><input type="checkbox" id="showDrop" /><label
                        for="showDrop" class="link">Pâtisserie</label>
                    <ul class="drop_menu">
                        <?php $categories = $DB->selectAll("SELECT DISTINCT page_url, name FROM categorie WHERE type = 1");
                        foreach ($categories as $categorie) { ?>
                            <li><a href="./<?= strtolower($categorie['page_url']) ?>" class="link">
                                    <?= $categorie['name'] ?>
                                </a></li><?php } ?>
                    </ul>
                </li>
                <li><a href="./evenement" class="link">Evénement</a></li>
                <li><a href="./contact" class="link">Contact</a></li>
            </ul><label for="menu-btn" class="btn menu-btn"><i class="fa-solid fa-bars"></i></label>
        </nav>
    </header>