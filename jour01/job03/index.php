<?php

class Personne
{
    public $nom;
    public $prenom;

    public function __construct($nom, $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function SePresenter()
    {
        return "Je suis " . $this->prenom . " " . $this->nom . ".";
    }
}

$personne1 = new Personne("Doe", "John");
echo $personne1->SePresenter() . "\n";

$personne2 = new Personne("Dupont", "Jean");
echo $personne2->SePresenter() . "\n";
