<?php
class Personnage
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function gauche()
    {
        $this->x = $this->x - 1; // Soustraire 1 pour aller à gauche
    }

    public function droite()
    {
        $this->x = $this->x + 1;  // Ajouter 1 pour aller à droite
    }

    public function bas()
    {
        $this->y = $this->y + 1; // Soustraire 1 pour monter
    }

    public function haut()
    {
        $this->y = $this->y - 1; // Ajouter 1 pour descendre
    }

    public function position()
    {
        return array($this->x, $this->y);
    }
}


$personnage = new Personnage(1, 1);

echo "Position initiale : ";
print_r($personnage->position());

// Déplacements
$personnage->droite();
$personnage->bas();

// Affichage de la nouvelle position
echo "\nPosition après déplacement : ";
print_r($personnage->position());
