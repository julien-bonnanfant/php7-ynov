<?php

/**
 * Affiche un nombre joliement
 * ex : 12345 affichera 12 345
 * ex : 12.3 affichera 12,3
 */
function prettyNumber($number, int $round = 0): string
{
    return number_format($number, $round, ',', ' ');
}
