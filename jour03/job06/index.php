<?php

class Vehicule
{
    public $marque;
    public $modele;
    public $annee;
    public $prix;

    public function __construct($marque, $modele, $annee, $prix)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->prix = $prix;
    }

    public function informationsVehicule()
    {
        echo "Marque: " . $this->marque . "<br>";
        echo "Modèle: " . $this->modele . "<br>";
        echo "Année: " . $this->annee . "<br>";
        echo "Prix: " . $this->prix . " €<br>";
    }
}

class Voiture extends Vehicule
{
    public $portes;

    public function __construct($marque, $modele, $annee, $prix, $portes = 4)
    {
        parent::__construct($marque, $modele, $annee, $prix);
        $this->portes = $portes;
    }

    public function informationsVehicule()
    {
        parent::informationsVehicule();
        echo "Nombre de portes: " . $this->portes . "<br><br>";
    }
}

// Instanciation d'un objet Voiture
$voiture = new Voiture("Toyota", "Corolla", 2020, 20000);
$voiture->informationsVehicule();


class Moto extends Vehicule
{
    public $roue;

    public function __construct($marque, $modele, $annee, $prix, $roue = 2)
    {
        parent::__construct($marque, $modele, $annee, $prix);
        $this->roue = $roue;
    }
    public function informationsVehicule()
    {
        parent::informationsVehicule();
        echo "Nombre de roues: " . $this->roue . "<br><br>";
    }
    public function demarrer()
    {
        echo "La moto démarre<br>";
    }
}

// Instanciation d'un objet Moto
$moto = new Moto("Yamaha", "1200", 1987, 4500);
$moto->informationsVehicule();

// Instanciation d'un objet Moto
$moto = new Moto("Yamaha", "1200", 1987, 4500);
$moto->informationsVehicule();
$moto->demarrer();
