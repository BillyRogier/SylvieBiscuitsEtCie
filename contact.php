<?php
require_once('./components/header.php');
$evenements = $DB->selectAll("SELECT * FROM evenement"); ?>
<main>
    <section>
        <div class="categorie">
            <h1 class="categorie-title">contact</h1>
            <div class="ruban"></div>
        </div>
        <div class="contact grid">
            <div class="email-container grid">
                <h2>Email</h2>
                <p><i class="fa-solid fa-triangle-exclamation"></i>&ensp;Pour chaque commande un délai de 3 jours est
                    souhaité</p>
                <form action method="POST" class="contact_form grid">
                    <div>
                        <p class="input-title">Nom*</p><input class="input-contact" type="text" name="name" required />
                    </div>
                    <div>
                        <p class="input-title">Email*</p><input class="input-contact" type="email" name="email"
                            required />
                    </div>
                    <div>
                        <p class="input-title">Message*</p><textarea name="message" rows="6" cols="25"
                            required></textarea><br />
                    </div>
                    <div class="mail_btn-container"><input type="submit" id="btn_submit" value="envoyé"
                            class="button" />
                        <div class="loader_mail"></div>
                    </div>
                </form>
            </div>
            <div class="map grid">
                <h2>Map</h2><iframe id="map"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2844.6435524759977!2d4.285026999999999!3d44.522453999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b4e4461b135171%3A0x5976ed553c403a8c!2s120%20Mas%20Gauthier%2C%2007110%20Montr%C3%A9al!5e0!3m2!1sfr!2sfr!4v1654433354413!5m2!1sfr!2sfr"
                    style="border: 0" allowfullscreen="" loading="fast"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="contact-info grid">
                <h2>Info</h2>
                <div>
                    <p class="tel"><strong class="strong">Tel&ensp;:&ensp;</strong>0652079512</p>
                    <p class="email"><strong class="strong">Email&ensp;:&ensp;</strong>sylvie.rogier@free.fr</p>
                    <p class="adress"><strong class="strong">Adresse&ensp;:&ensp;</strong>120 rue du Mas Gauthier,07110
                        Montréal</p>
                </div><a class="mentions" href="./mentions_legales.php" target="_blank">mentions légales<i
                        class="fas fa-external-link-alt"></i></a>
            </div>
        </div>
    </section>
</main>
<?php
include_once('./components/foot.php');