<?php require __DIR__ . '/database.php' ?>

<div class="container">
    <div class="row">
        <div class="col">
            <?php
            echo "<h3>" . $inglouriousBasterds->title . "</h3>";
            echo "<p>" . "Voto: " . $inglouriousBasterds->rate . "</p>";
            echo "<p>" . "Genere: " . $inglouriousBasterds->genre . "</p>";
            echo "<p>" . "Regia: " . $inglouriousBasterds->director . "</p>";

            $inglouriousBasterds->setConsigliato($inglouriousBasterds->rate);
            $inglouriousBasterds->getConsigliato();

            echo "<p>" . $inglouriousBasterds->advice . "</p>";
            ?>
            <!-- <i class="fa-solid" :class=" (<?php $inglouriousBasterds->advice == true ?>) ? 'fa-thumbs-up' : 'fa-thumbs-down' "></i> -->
        </div>

        <div class="col">
            <?php
            echo "<h3>" . $noCountryForOldMen->title . "</h3>";
            echo "<p>" . "Voto: " . $noCountryForOldMen->rate . "</p>";
            echo "<p>" . "Genere: " . $noCountryForOldMen->genre . "</p>";
            echo "<p>" . "Regia: " . $noCountryForOldMen->director . "</p>";

            $noCountryForOldMen->setConsigliato($noCountryForOldMen->rate);
            $noCountryForOldMen->getConsigliato();

            echo "<p>" . $noCountryForOldMen->advice . "</p>";
            ?>
        </div>
    </div>
</div>
