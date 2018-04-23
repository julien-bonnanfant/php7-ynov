<?php

require_once(__DIR__.'/src/app.php');

// on récupère la série en fonction de la slug dans l'url
// ex : serie.php?slug=gameofthrones
$show = getShowBySlug($_GET['slug']);

include($projectDirectory.'/src/templates/serie_template.php');
