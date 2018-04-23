<?php

require 'vendor/autoload.php';

$client = new \GuzzleHttp\Client();
$res = $client->request('GET', 'https://www.tentacode.net');

// le nom complet d'une classe php est son namespace ET le nom de sa classe
// une fois qu'une classe possède un namespace, on ne peut plus l'appeller juste avec son nom de classe
$cat = new \Creature\Animal\Cat("Shiva");

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        Status Code : <?= $res->getStatusCode() ?><br />
        Mon chat : <?= $cat ?><br />
        Body :
        <pre>
            <?= htmlspecialchars($res->getBody()); ?>
        </pre>
    </body>
</html>
