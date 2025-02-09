<?php
class Rectangle
{
    private float $longueur;
    private float $largeur;

    public function __construct(float $longueur, float $largeur)
    {
        $this->setLongueur($longueur);
        $this->setLargeur($largeur);
    }

    // Assesseurs (Getters)
    public function getLongueur(): float
    {
        return $this->longueur;
    }

    public function getLargeur(): float
    {
        return $this->largeur;
    }

    // Mutateurs (Setters)
    public function setLongueur(float $longueur): void
    {
        if ($longueur > 0) {
            $this->longueur = $longueur;
        }
    }

    public function setLargeur(float $largeur): void
    {
        if ($largeur > 0) {
            $this->largeur = $largeur;
        }
    }

    // Méthode pour calculer le périmètre
    public function perimetre(): float
    {
        return 2 * ($this->longueur + $this->largeur);
    }

    // Méthode pour calculer la surface
    public function surface(): float
    {
        return $this->longueur * $this->largeur;
    }
}

// Création d'un rectangle
$rectangle = new Rectangle(5.0, 3.0);

// Affichage du périmètre et de la surface
echo "Périmètre du rectangle: " . $rectangle->perimetre() . " unités\n";
echo "Surface du rectangle: " . $rectangle->surface() . " unités carrées\n";
