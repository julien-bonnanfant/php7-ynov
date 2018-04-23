<?php

/**
 * Récupère une série aléatoire
 */
function getRandomShow(array $shows): array
{    
    $randomIndex = array_rand($shows, 1);
    
    return $shows[$randomIndex];
}
