<?php
class Operation
{
    public $nombre1;
    public $nombre2;
}

// Créer un objet
$operation = new Operation();

// Assigner des valeurs
$operation->nombre1 = 15;
$operation->nombre2 = 5;

// Afficher les valeurs
echo "Nombre1 : " . $operation->nombre1 . "<br>";
echo "Nombre2 : " . $operation->nombre2 . "<br>";
