<?php
function arrayRand($data) {
    $randomIndex = mt_rand(0, count($data) - 1);

    // retourne un élément aléatoire d'un tableau
    return $data[$randomIndex];
}
$name = require('name.php');
$adjectives = require('adjectif.php');
$animals = require('animals.php');
$emojis = require('emojis.php');

$name = arrayRand($name);
$adjectives1 = arrayRand($adjectives);
$adjectives2 = arrayRand($adjectives);
$animal = arrayRand($animals);
$emoji = arrayRand($emojis);
 print sprintf(
    "%s est %s comme un %s %s ! %s\n",
    $name,
    $adjectives1,
    $adjectives2,
    $animal,
    $emoji
);
