<?php
function rankingRating($shows) {
    $json = file_get_contents(__DIR__.'/../data/shows.json');
    $shows = json_decode($json, true);
    usort($shows, function ($a, $b) { return $b['statistics']['rating'] <=> $a['statistics']['rating']; });
    return $shows;
}


?>
