<?php

require_once(__DIR__.'/src/app.php');

// on récupère les séries
$shows = getShows();

// on trie les séries par popularité
$mostPopularShows = sortShows($shows, 'popularity');

// on récupère les 3 premiers
$mostPopularShows = array_slice($mostPopularShows, 0, 3);

// on trie les séries par note
$bestRatedShows = sortShows($shows, 'rating');

// on récupère les 3 premiers
$bestRatedShows = array_slice($bestRatedShows, 0, 3);

// on récupère une série aléatoire
$randomShow = getRandomShow($shows);

include($projectDirectory.'/src/templates/index_template.php');
