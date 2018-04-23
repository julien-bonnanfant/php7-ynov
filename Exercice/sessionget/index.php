
<?php
session_start();
if (!isset($_SESSION['history'])) {
    $_SESSION['history'] = [];
}
$firstname = 'Anonyme';
if (isset($_GET['firstname'])) {
    $firstname = $_GET['firstname'];
}
$_SESSION['history'][] = sprintf(
    'Heure : %s - %s',
    date('H:i:s'),
    $firstname
);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>Session</h1>

        <pre>
            <?php print_r($_SESSION); ?>
        </pre>
    </body>
</html>
?>
