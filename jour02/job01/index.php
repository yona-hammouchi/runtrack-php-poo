<?php
class Rectangle
{
    public $longueur;
    public $largeur;

    public function __construct($longueur, $largeur)
    {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function getLongueur()
    {
        return $this->longueur;
    }

    public function getLargeur()
    {
        return $this->largeur;
    }

    public function setLongueur($longueur)
    {
        $this->longueur = $longueur;
    }

    public function setLargeur($largeur)
    {
        $this->largeur = $largeur;
    }
}

// Création d'un rectangle
$rectangle = new Rectangle(10, 5);

// Affichage des dimensions initiales
echo "Dimensions initiales :\n";
echo "Longueur : " . $rectangle->getLongueur() . "\n";
echo "Largeur : " . $rectangle->getLargeur() . "\n";

// Modification des dimensions
$rectangle->setLongueur(15);
$rectangle->setLargeur(8);

// Affichage des nouvelles dimensions
echo "\nNouvelles dimensions :\n";
echo "Longueur : " . $rectangle->getLongueur() . "\n";
echo "Largeur : " . $rectangle->getLargeur();
