<body>
    
<?php 
class Movie {
    public $title;
    public $rate;
    public $genre;
    public $director;

    function __construct($_title, $_rate, $_genre, $_director) {
        $this->title = $_title;
        $this->rate = $_rate;
        $this->genre = $_genre;
        $this->director = $_director;
    }
}

$ungloriousBasterds = new Movie('Unglorious Basterds', 10, 'Action', 'Tarantino');
$noCountryForOldMen = new Movie('No Country For Old Men', 10, 'Thriller', 'Coen bros.');
?>
