<?php

require_once('./components/header.php');

$evenements = $DB->selectAll("SELECT * FROM evenement");

?>

<main>
    <section>
        <div class="categorie">
            <h1 class="categorie-title">événement</h1>
            <div class="ruban"></div>
        </div>
        <div class="evenements grid">
            <?php
            if ($evenements) {
                foreach ($evenements as $evenement) {
                    if ($evenement['date_end'] > date("Y-m-d")) { ?>
                        <img src="<?= $evenement['img'] ?>" alt="" class="event_img">
                    <?php } else {
                        $DB->delete("DELETE FROM evenement WHERE id =" . $evenement['id'] . "");
                        header("location: ./evenement.php");
                        exit;
                    }
                }
            } else {
                echo "<p style='text-align:center;'>Pas d'événements</p>";
            } ?>
        </div>
    </section>
</main>

<?php

include_once('./components/foot.php');