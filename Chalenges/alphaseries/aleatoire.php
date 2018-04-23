<?php
function affiche(){
    $json = file_get_contents(__DIR__.'/data/shows.json');
    $shows = json_decode($json, true);
    $random_serie = array_rand($shows);
    var_dump($shows[$random_serie]);
}

?>
