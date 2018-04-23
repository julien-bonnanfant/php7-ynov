<?php

// La classe Cat "étend" (ou "hérite") d'une classe parent "Animal"
// cela revient à dire qu'elle contient tout le code de la classe Animal (propriétés et méthodes)
// en plus de son propre code 
class Cat extends Animal
{
    public function miaou()
    {       
        // on peut appeler une méthode de la classe parente
        // dans une méthode de la classe enfant (SAUF si la méthode parente est private)
        print $this->cri(). " : Miaou";
    }
    
    public function __toString()
    {
        return "C'est un chat : ". $this->name;
    }
}
