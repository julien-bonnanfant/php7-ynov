<?php

/**
 * Pour insérer (ou supprimer, ou mettre à jour) dans une base de donnée, 
 * c'est exactement le même principe
 */
 
$dsn = 'mysql:dbname=php;host=127.0.0.1';
$user = 'root';
$password = 'ynov';

$connection = new PDO($dsn, $user, $password);

$statement = $connection->prepare("
    INSERT INTO `fruit` (`name`)
    VALUES
        (:fruit_name)
    ;
");

// pour être sûr que la valeur ne va pas poser de problème de sécurité
// on utilise bindValue plutôt que de concaténer dans le SQL
$statement->bindValue(':fruit_name', $_GET['name']);

$statement->execute();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>Creation du fruit <?= $_GET['name'] ?> OK.</h1>
    </body>
</html>
