<?php

require_once(__DIR__.'/src/app.php');

// on récupère les séries
$shows = getShows();

// par défaut on trie par popularité
$sort = 'popularity';

// on récupère le tri dans l'url, ex : classement.php?sort=rating
if (isset($_GET['sort'])) {
    $sort = $_GET['sort'];
}

// on récupère les séries triées en fonction du critère de tri sélectionné
$sortedShows = sortShows($shows, $sort);

// pagination des résultats
$countPerPage = 10;
$pageCount = ceil(count($sortedShows) / $countPerPage);
$page = 1;
if (isset($_GET['page'])) {
    $page = (int)$_GET['page'];
}

// si page = 1 -> start = 0
// si page = 2 -> start = 10
// si page = 3 -> start = 20
// etc.
$start = ($page - 1) * $countPerPage;

$sortedShows = array_slice($sortedShows, $start, $countPerPage);

include($projectDirectory.'/src/templates/classement_template.php');
