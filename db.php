<?php
class Movie
{
    public string $title;
    public string $author;
    public string $duration;
    public $genre;
    public $actor;
    public int $releaseYear;


    function __construct($_title, $_duration)
    {
        $this->title = $_title;
        $this->duration = $_duration;
    }

    function howOld()
    {
        $currentYear = date("Y");
        if (isset($this->releaseYear)) {
            return $currentYear - $this->releaseYear;
        }
    }
}


$film1 = new Movie("Mezzogiorno di fuoco", "01:25:00");
$film1->author = "Fred Zinnemann";
$film1->genre = array("Western");
$film1->actor = array("Gary Cooper", "Grace Kelly", "Katy Jurado", "Lee Van Cleef");
$film1->releaseYear = 1952;


$film2 = new Movie("Il Signore degli Anelli - La Compagnia dell'Anello", "02:58:00");
$film2->author = "Peter Jackson";
$film2->genre = array("Fantasy", "Avventura", "Azione", "Epico", "Drammatico");
$film2->actor = array("Elijah Wood", "Ian McKellen", "Liv Tyler", "Viggo Mortensen");
$film2->releaseYear = 2001;
