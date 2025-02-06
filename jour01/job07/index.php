<?php
class Cercle
{
    public $rayon;

    public function __construct($rayon)
    {
        $this->rayon = $rayon;
    }

    public function changerRayon($nouveauRayon)
    {
        $this->rayon = $nouveauRayon;
    }

    public function circonférence()
    {
        return 2 * M_PI * $this->rayon;
    }

    public function aire()
    {
        return M_PI * pow($this->rayon, 2);
    }

    public function diametre()
    {
        return 2 * $this->rayon;
    }

    public function afficherInfos()
    {
        return "Cercle de rayon " . $this->rayon . " unités";
    }
}

// Création des deux cercles
$cercle1 = new Cercle(4);
$cercle2 = new Cercle(7);

// Affichage des informations du premier cercle
echo $cercle1->afficherInfos() . "\n";
echo "Circonférence : " . $cercle1->circonférence() . " unités\n";
echo "Diamètre : " . $cercle1->diametre() . " unités\n";
echo "Aire : " . $cercle1->aire() . " unités carrées\n\n";

// Affichage des informations du deuxième cercle
echo $cercle2->afficherInfos() . "\n";
echo "Circonférence : " . $cercle2->circonférence() . " unités\n";
echo "Diamètre : " . $cercle2->diametre() . " unités\n";
echo "Aire : " . $cercle2->aire() . " unités carrées\n";
