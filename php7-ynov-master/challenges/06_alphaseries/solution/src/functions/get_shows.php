<?php

/**
 * Récupère les séries du fichier JSON
 */
function getShows(): array
{    
    $dataFilename = __DIR__.'/../../data/shows.json';
    if (!is_file($dataFilename)) {
        die(sprintf(
            'Le fichier "%s" des séries est introuvable.',
            $dataFilename
        ));
    }
    
    $json = file_get_contents($dataFilename);
    
    return json_decode($json, true);
}
