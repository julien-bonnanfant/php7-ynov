<?php

// Sans programmation orientée objet,
// on pouvait représenter une structure simple avec un tableau PHP
$captain = [
    'age' => 23,
    'name' => 'Jacques Spareau',
    'is_dead' => 'true',
    'famous_last_words' => 'AAaaargh...',
];

// Voici la même structure représentée en POO (Programmation Orientée Objet)
// l'avantage est qu'en plus de stocker des données,
// on peut stocker du code qui va nous permettre de les traiter au bon endroit.

// La programmation objet est généralement utilisée pour refleter des concepts du monde réel
// mais peut aussi être utilisée pour représenter des concepts plus abstrait.

// Une classe s'écrit en CamelCase
class Captain
{
    // Une classe peut contenir des propriétés
    // ce sont des variables qui sont liées fortement à la classe
    
    // Une propriété public est accessible de l'extérieur (et à l'intérieur) de la classe en utilisant :
    // $moncapitaine->name
    public $name;
    
    // Une propriété protected (ou private) n'est accessible qu'à l'intérieur de la classe en utilisant :
    // $this->age
    // $this contient la valeur de l'instance courrante, et n'est utilisable qu'à l'intérieur de la classe
    // par exemple $this à l'intérieur de la classe est équivalent à $jaquesSpareau à l'extérieur de la classe
    protected $age;
    
    // une propriété peut avoir une valeur par défaut
    protected $isDead = false;
    
    // le constructeur sert à initialiser un objet avec des valeurs au moment où l'on instancie
    // il est automatiquement appelé quand on utilise le mot clé "new"
    // $capitaine = new Captain("Toto", 12); appelera __construct("Toto", 12)
    public function __construct(string $name, int $age = 0)
    {
        $this->age = $age;
        $this->name = $name;
    }
    
    // la méthode __toString permet d'automatiquement transformer un objet en string
    // quand on appelle la méthode print (ou tout autre méthode qui a besoin d'une string), par exemple :
    // print $captain affichera "Le capitaine s'appelle : Jaques Sparreau"
    public function __toString()
    {
        return "Le capitaine s'appelle : ".$this->name;
    }
    
    // une méthode public peut être appellée à l'exterieur ou à l'intérieur de la classe : $captain->death()
    // une méthode protected ou private ne peut que être appellée  de l'intérieur de la classe : $this->death();
    public function death()
    {
        $this->isDead = true;
    }
    
    public function printNameUpper()
    {
        // on peut appeler des fonctions PHP, ou d'autres méthodes de la classe
        // depuis une méthode de la classe
        print strtoupper($this->name);
    }
    
    // Comme les autres fonctions, une méthode peut avoir des paramêtres en entrée (qui viennent de l'exterieur)
    // les paramêtres peuvent être typés et on peut dire quel est le type de retour de la fonction
    public function isOlder(int $oldAge): bool
    {
        if ($oldAge > $this->age) {
            return true;
        } else {
            return false;
        }
    }
}

// pour créer une instance de la classe Captain, on utilise le mot clé new
// cela cré une copie de la classe avec ses propriétés par défaut
// et appelle la fonction __construct si elle existe
// la variable vie ça vie ensuite et ses propriétés peuvent changer sans que ça impact les autres instances
$jaquesSpareau = new Captain("Jaques Sparreau", 23);

// on peut créer autant d'instances d'une classe que l'on veut, chacune avec ses propriétés propres qui peuvent changer
$barbarosa = new Captain("Barbarosa", 42);
$barbarosa->death();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Jumbotron Template for Bootstrap</title>
    
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <main role="main">
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Le capitaine en objet</h1>
                <pre>
                    <!-- pour pouvoir print une instance, elle doit posséder une méthode __toString -->
                    <?php print $jaquesSpareau; ?>
                    <!-- on peut appeller les méthodes de la classe qui sont public, mais pas protected ni private -->
                    <?php $jaquesSpareau->printNameUpper(); ?>
                    <?php var_dump($jaquesSpareau); ?>
                    <?php var_dump($barbarosa); ?>
                </pre>
            </div>
        </div>
    </main>
</body>
</html>
