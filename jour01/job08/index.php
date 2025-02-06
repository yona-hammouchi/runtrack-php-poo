<?php
class Produit
{
    public $nom;
    public $prixHT;
    public $TVA;

    public function __construct($nom, $prixHT, $TVA)
    {
        $this->nom = $nom;
        $this->prixHT = $prixHT;
        $this->TVA = $TVA;
    }

    public function CalculerPrixTTC()
    {
        return $this->prixHT * (1 + $this->TVA / 100);
    }

    public function afficher()
    {
        return "Produit : " . $this->nom . "\n" .
            "Prix HT : " . $this->prixHT . " €\n" .
            "TVA : " . $this->TVA . "%\n" .
            "Prix TTC : " . $this->CalculerPrixTTC() . " €";
    }

    public function modifierNom($nouveauNom)
    {
        $this->nom = $nouveauNom;
    }

    public function modifierPrix($nouveauPrix)
    {
        $this->prixHT = $nouveauPrix;
    }
    public function getNom()
    {
        return $this->nom;
    }

    public function getPrixHT()
    {
        return $this->prixHT;
    }

    public function getTVA()
    {
        return $this->TVA;
    }
}

// Création de deux produits
$produit1 = new Produit("Laptop", 999, 20);
$produit2 = new Produit("Souris", 29, 20);

// Affichage des informations initiales
echo $produit1->afficher() . "\n";
echo $produit2->afficher() . "\n";

// Modification des produits
$produit1->modifierNom("Ordinateur Portable");
$produit1->modifierPrix(1099);
$produit2->modifierNom("Souris Gaming");
$produit2->modifierPrix(39);

// Affichage des nouvelles informations
echo $produit1->afficher() . "\n";
echo $produit2->afficher();
