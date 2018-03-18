<?php
//a,sign,b
$firstArg = $argv[1];
$sign = $argv[2];
$secondArg = $argv[3];

// Gestion premier agruments (1ere valeur)
    if (isset($argv[1])) {

        if (is_numeric($firstArg))
        {
            //do nothinng
        }
        else {print "Erreur !! Veuillez entrer un nombre\n";}
    }
// Gestion du troisieme argument(2eme valeurs)
    if (isset($argv[3])) {

        if (is_numeric($secondArg))
        {
            //do nothing
        }
        else {print "Erreur !! Veuillez entrer un nombre\n";}
        }
//Gestion du signe du calcul
    if (isset($argv[2])) {
            switch ($sign) {
        case '+':
            $result = $firstArg + $secondArg;
            print "Votre resultat est ".$result.".\n";
            break;
        case '-':
            $result = $firstArg - $secondArg;
            print "Votre resultat est ".$result.".\n";
            break;
        case '*':
            $result = $firstArg * $secondArg;
            print "Votre resultat est ".$result.".\n";
            break;
        case '/':
            $result = $firstArg / $secondArg;
            print "Votre resultat est ".$result.".\n";

            break;
        default: echo "Erreur !! Ceci n'est pas un signe \n";
}
}


?>
