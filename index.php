<?php
require_once __DIR__ . "/db.php";

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
            <div class="card col">
                <div class="card-body">
                    <h5 class="card-title">Titolo: <?php echo $film1->title ?></h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Regista: <?php echo $film1->author ?></li>
                    <li class="list-group-item">Genere/i: <?php foreach ($film1->genre as $type) {
                                                                echo $type . ' - ';
                                                            }  ?>
                    </li>
                    <li class="list-group-item">Attori: <?php foreach ($film1->actor as $value) {
                                                            echo $value . ' - ';
                                                        } ?></li>
                    <li class="list-group-item">Prima volta in sala <?php echo $film1->howOld() ?> anni fa'</li>
                </ul>
            </div>
            <div class="card col">
                <div class="card-body">
                    <h5 class="card-title">Titolo: <?php echo $film2->title ?></h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Regista: <?php echo $film2->author ?></li>
                    <li class="list-group-item">Genere/i: <?php foreach ($film2->genre as $generi) {
                                                                echo $generi . ' - ';
                                                            }  ?> </li>
                    <li class="list-group-item">Attori: <?php foreach ($film2->actor as $actors) {
                                                            echo $actors . ' - ';
                                                        } ?></li>
                    <li class="list-group-item">Prima volta in sala <?php echo $film2->howOld() ?> anni fa'</li>
                </ul>
            </div>
        </div>
    </div>

</body>

</html>