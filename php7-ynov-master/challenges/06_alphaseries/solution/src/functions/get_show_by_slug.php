<?php

/**
 * Récupère une série en fonction de son slug
 */
function getShowBySlug(string $slug): array
{    
    $shows = getShows();
    
    if (!isset($shows[$slug])) {
        die(sprintf(
            'La série avec le slug "%s" est introuvable.',
            $slug
        ));
    }
    
    return $shows[$slug];
}
