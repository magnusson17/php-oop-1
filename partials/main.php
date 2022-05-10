<?php 
class Movie {
    public $title;
    public $rate;
    public $genre;
    public $director;
    public $advice;

    function __construct($_title, $_rate, $_genre, $_director) {
        $this->title = $_title;
        $this->rate = $_rate;
        $this->genre = $_genre;
        $this->director = $_director;
    }

    public function setConsigliato($rate) {
        if($rate > 6) {
            $this->advice = 'consigliato';
        } else {
            $this->advice = 'sconsigliato';
        }
    }

    public function getConsigliato() {
        return $this->advice;
    }
}

$inglouriousBasterds = new Movie('Inglourious Basterds', 10, 'Action', 'Tarantino');
$noCountryForOldMen = new Movie('No Country For Old Men', 10, 'Thriller', 'Coen bros.');
var_dump($inglouriousBasterds)
?>

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
