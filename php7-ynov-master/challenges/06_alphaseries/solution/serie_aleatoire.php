<?php

require_once(__DIR__.'/src/app.php');

// on récupère les séries
$shows = getShows();

// on récupère une série aléatoire
$randomShow = getRandomShow($shows);

// on redirige vers la fiche série
header('Location: '.$serverHost.'/serie.php?slug='.$randomShow['slug']);
