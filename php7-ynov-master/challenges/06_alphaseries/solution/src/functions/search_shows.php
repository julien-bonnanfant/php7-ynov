<?php

/**
 * Récupère les séries qui correspondent à la recherche
 * avec les plus populaires en premier
 */
function searchShows(string $search): array
{    
    if ($search === '') {
        return [];
    }
    
    $shows = getShows();
    
    $searchedShows = array_filter($shows, function($show) use ($search) {
        return stripos($show['name'], $search) !== false;
    });
    
    usort($searchedShows, function($showA, $showB) {
        return $showB['statistics']['popularity'] <=> $showA['statistics']['popularity'];
    });
    
    return $searchedShows;
}
