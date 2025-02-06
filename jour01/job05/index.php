<?php

class Animal
{
    public $age;
    public $prenom;

    public function __construct()
    {
        $this->age = 0;
        $this->prenom = "";
    }

    public function afficherAge()
    {
        return "L'âge de l'animal est: " . $this->age;
    }

    public function vieillir()
    {
        $this->age = $this->age + 1;
    }
}

$animal = new Animal();

echo $animal->afficherAge() . "ans\n";

$animal->vieillir();
echo $animal->afficherAge() . "ans\n";
