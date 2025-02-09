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

// Création d'un objet Rectangle
$rectangle = new Rectangle(10, 5);

// Affichage de l'aire du rectangle
echo "L'aire du rectangle est : " . $rectangle->aire();
