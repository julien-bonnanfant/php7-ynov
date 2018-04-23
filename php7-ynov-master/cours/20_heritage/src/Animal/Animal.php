<?php

// La classe parente contient tout le code en commun des classes enfants
class Animal
{
    // la propriété est accessible depuis les deux classes enfant
    // sauf si elle est privée
    protected $name;
    
    // idem pour le constructeur, qui s'appliquera aux classes enfants
    public function __construct($name)
    {
        $this->name = strtoupper($name);
    }
    
    // idem pour les méthodes, qui sont disponibles dans les classes enfants (sauf private)
    public function cri(): string
    {
        return "L'animal cri";
    }
    
    public function __toString()
    {
        return "C'est un animal : ". $this->name;
    }
}
