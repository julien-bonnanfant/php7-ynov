<?php

class Shark extends Animal
{
    private $ocean;
    
    // on peut écraser une méthode (ou le constructeur)
    // de la classe parent, dans ce cas c'est toujours le constructeur de la classe enfant
    // qui sera appellé
    
    // dans le cas du constructeur, ça permet de changer les paramêtres d'initialisation qui peuvent differer du parent
    public function __construct($name, string $ocean)
    {
        // on peut quand même appeller la version du constructeur (ou d'une autre méthode) du parent
        // en utilisant parent::
        parent::__construct($name);
        
        $this->ocean = $ocean;
    }
    
    // exemple qui écrase la méthode cri
    public function cri()
    {
        return strtoupper(parent::cri());
    }
}
