<?php

include_once __DIR__ . '/classi/classi.php';

class Movie {
    public $nome;
    public $anno;
}

$movie1 = new Movie();
$movie1 -> nome = "Avatar";
$movie1 -> anno = "2009";

$movie2 = new Movie();
$movie1 -> nome = "Guardiani della Galassia";
$movie1 -> anno = "2017";

$movie3 = new Movie();
$movie1 -> nome = "Doctor Strange";
$movie1 -> anno = "2016";


?>