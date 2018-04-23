<?php

// pour que les classes soient disponibles, il faut require le fichier qui la contient
// ou passer par l'autoload (voir 21_composer)
require_once(__DIR__.'/src/Animal/Animal.php');
require_once(__DIR__.'/src/Animal/Cat.php');
require_once(__DIR__.'/src/Animal/Dog.php');

$cat = new Cat('Le chat');
$dog = new Dog('Le chien');

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Héritage en PHP</title>
    </head>
    <body>
        <h2>Chat</h2>
        <p><?php print $cat; ?></p>
        <p><?php print $cat->miaou(); ?></p>
        <h2>Chien</h2>
        <p><?php print $dog; ?></p>
        <p><?php print $dog->ouaf(); ?></p>
    </body>
</html>
