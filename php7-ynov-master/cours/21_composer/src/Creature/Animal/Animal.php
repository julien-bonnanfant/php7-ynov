<?php

// le namespace correspond à un "paquet" qui contient le code php
// il doit corresponde à l'arborescence des dossier dans /src
namespace Creature\Animal;

// le nom de la classe doit être identique au nom du fichier php
class Animal
{
    protected $name;
    
    public function __construct($name)
    {
        $this->name = strtoupper($name);
    }
    
    public function cri(): string
    {
        return "L'animal cri";
    }
    
    public function __toString()
    {
        return "C'est un animal : ". $this->name;
    }
}
