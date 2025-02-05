<?php
class Operation
{
    public $nombre1;
    public $nombre2;
    public function addition()
    {
        return $this->nombre1 + $this->nombre2;
    }
}

// Création d'un objet
$operation = new Operation();

// Assignation des valeurs
$operation->nombre1 = 15;
$operation->nombre2 = 5;

$resultat = $operation->addition();
echo " le résultat est : " . $resultat;
