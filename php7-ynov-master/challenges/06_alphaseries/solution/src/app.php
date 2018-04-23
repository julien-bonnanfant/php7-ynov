<?php

/**
 * Ce fichier app.php est inclu dans chaque page PHP du projet
 * il permet de mettre tout le code en commun dans un seul fichier
 * ça évite par exemple de devoir inclure les fonctions dans chaque fichier
 */

// variables pour retrouver facilement les répertoires
$projectDirectory = __DIR__.'/..';
$functionDirctory = $projectDirectory.'/src/functions';

$serverHost = 'http://localhost:8888';

// récupération des fonctions utiles dans tout le projet
require_once($functionDirctory.'/get_random_show.php');
require_once($functionDirctory.'/get_shows.php');
require_once($functionDirctory.'/get_show_by_slug.php');
require_once($functionDirctory.'/html_stars.php');
require_once($functionDirctory.'/pretty_number.php');
require_once($functionDirctory.'/search_shows.php');
require_once($functionDirctory.'/sort_shows.php');
