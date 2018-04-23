<?php

/**
 * Connexion à une base de données MySQL avec PDO
 */
 
// pour se connecter à une BDD MySQL, on doit d'abords créer une connexion à la base
$dsn = 'mysql:dbname=php;host=127.0.0.1';
$user = 'root';
$password = 'ynov';

$connection = new PDO($dsn, $user, $password);

// ensuite on créé un objet statement
$statement = $connection->prepare("
    SELECT name FROM fruit;
");

// la requête n'est PAS EXECUTÉE tant qu'on a pas appelé la méthode execute de l'objet statement
$statement->execute();

// pour récupérer les résultats sous forme de tableau on utiliser `fetchAll()`
// mais de nombreuses méthodes existent : http://php.net/manual/fr/class.pdostatement.php
$fruits = $statement->fetchAll();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>Liste des fruits</h1>
        <pre>
            <?php var_dump($fruits); ?>
        </pre>
    </body>
</html>
