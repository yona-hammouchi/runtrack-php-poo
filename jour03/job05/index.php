<?php

class Forme
{
    public function aire()
    {
        return 0;
    }
}

class Rectangle extends Forme
{
    private $largeur;
    private $hauteur;

    public function __construct($largeur, $hauteur)
    {
        $this->largeur = $largeur;
        $this->hauteur = $hauteur;
    }

    public function aire()
    {
        return $this->largeur * $this->hauteur;
    }
}

class Cercle extends Forme
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function aire()
    {
        return pi() * pow($this->radius, 2);
    }
}

// Création des instances
$rectangle = new Rectangle(10, 5);
$cercle = new Cercle(7);

// Affichage des résultats
echo "L'aire du rectangle est : " . $rectangle->aire() . "<br>";
echo "L'aire du cercle est : " . $cercle->aire();
