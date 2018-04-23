<?php

require_once(__DIR__.'/src/app.php');

if (!isset($_POST['search'])) {
    die("Le formulaire n'a pas été correctement envoyé.");
}

$search = $_POST['search'];

// on recherche les shows qui correspondent à la recherche
$searchedShows = searchShows($search);

$countSearchShows = count($searchedShows);

// limitation au 100 premiers
$searchedShows = array_slice($searchedShows, 0, 100);

include($projectDirectory.'/src/templates/recherche_template.php');
