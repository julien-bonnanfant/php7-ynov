<?php

/**
 * Tri les séries selon une clé $statistics (popularity, rating, etc.)
 */
function sortShows(array $shows, string $statistic = 'popularity'): array
{
    uasort($shows, function($showA, $showB) use ($statistic) {
        return $showB['statistics'][$statistic] <=> $showA['statistics'][$statistic];
    });
    
    return $shows;
}
