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
?>