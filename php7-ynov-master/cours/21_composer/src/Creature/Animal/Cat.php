<?php

// le namespace correspond à un "paquet" qui contient le code php
// il doit corresponde à l'arborescence des dossier dans /src
namespace Creature\Animal;

// le nom de la classe doit être identique au nom du fichier php
class Cat extends Animal
{
    public function miaou()
    {        
        print parent::cri(). " : Miaou";
    }
    
    public function __toString()
    {
        return "C'est un chat : ". $this->name;
    }
}
