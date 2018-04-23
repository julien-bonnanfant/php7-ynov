<?php

/**
 * Fonction qui affiche le nombre d'étoiles et demi-étoile en HTML
 */
function htmlStars(float $rating)
{    
    // on compte sur 10, c'est plus facile
    $tenRating = round($rating * 2);
    
    for ($starIndex = 1; $starIndex <= 5; $starIndex++) {
        if ($tenRating >= $starIndex * 2) {
            print '<i class="fa fa-star"></i>';
        }
    }
    
    if ($tenRating % 2 === 1) {
        print '<i class="fa fa-star-half"></i>';
    }
}
