<?php


class Movie
{
    public string $title;
    public string $author;
    public string $duration;
    public string $genre;
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
$film1->genre = "Western";
$film1->actor = array("Gary Cooper", "Grace Kelly", "Katy Jurado", "Lee Van Cleef");
$film1->releaseYear = 1952;


$film2 = new Movie("Il Signore degli Anelli - La Compagnia dell'Anello", "02:58:00");
$film2->author = "Peter Jackson";
$film2->genre = "Fantasy";
$film2->actor = array("Elijah Wood", "Ian McKellen", "Liv Tyler", "Viggo Mortensen");
$film2->releaseYear = 2001;
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <title>PHP-OOP-1</title>
</head>

<body>
    <div class="container py-4">
        <div class="row">
            <div class="col py-2">
                <h1> Titolo: <?php echo $film1->title ?></h1>
                <h2> Regista: <?php echo $film1->author ?></h2>
                <span> Genere/i: <?php echo $film1->genre ?> </span>
                <p> Attori: <?php echo $film1->actor[0] ?></p>
                <h3>Prima volta in sala <?php echo $film1->howOld() ?> anni fa'</h3>
            </div>
            <div class="col py-2">
                <h1> Titolo: <?php echo $film2->title ?></h1>
                <h2> Regista: <?php echo $film2->author ?></h2>
                <span> Genere/i: <?php echo $film2->genre ?> </span>
                <p> Attori: <?php echo $film2->actor[0] ?></p>
                <h3>Prima volta in sala <?php echo $film2->howOld() ?> anni fa'</h3>
            </div>
        </div>
    </div>

</body>

</html>