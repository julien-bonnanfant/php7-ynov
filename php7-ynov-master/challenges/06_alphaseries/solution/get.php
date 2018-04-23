<?php

$prenoms = [
    'Hugo',
    'Gabriel',
    'Louise',
];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>Test GET</h1>
        <p>Prénom : 
        <?php print $_GET['prenom']; ?>
        </p>
        <pre><?php print_r($_GET); ?></pre>
        
        <?php 
            foreach ($prenoms as $prenom) {
                print '<a href="get.php?prenom='.$prenom.'">Page '.$prenom.'</a><br />';
            }
        ?>
        
    </body>
</html>
