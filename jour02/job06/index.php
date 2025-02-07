<?php

class Commande
{
    private $numeroCommande;
    private $listePlats;
    private $statut;

    public function __construct($numeroCommande)
    {
        $this->numeroCommande = $numeroCommande;
        $this->listePlats = [];
        $this->statut = 'en cours';
    }

    public function ajouterPlat($nomPlat, $prix)
    {
        $this->listePlats[$nomPlat] = $prix;
    }

    public function annulerCommande()
    {
        $this->statut = 'annulée';
    }

    private function calculerTotal()
    {
        $total = 0;
        foreach ($this->listePlats as $prix) {
            $total += $prix;
        }
        return $total;
    }

    public function afficherCommande()
    {
        $total = $this->calculerTotal();
        echo "Commande N°: " . $this->numeroCommande . "<br>";
        echo "Statut: " . $this->statut . "<br>";
        echo "Plats commandés:<br>";
        foreach ($this->listePlats as $nomPlat => $prix) {
            echo "- $nomPlat: $prix €<br>";
        }
        echo "Total à payer: " . $total . " €<br>";
    }

    public function calculerTVA($tauxTVA)
    {
        $total = $this->calculerTotal();
        $tva = $total * ($tauxTVA / 100);
        return $tva;
    }
}

// Exemple d'utilisation de la classe Commande
$commande = new Commande(1);
$commande->ajouterPlat("Pizza", 12);
$commande->ajouterPlat("Salade", 8);
$commande->afficherCommande();
echo "TVA (20%): " . $commande->calculerTVA(20) . " €<br>";
$commande->annulerCommande();
$commande->afficherCommande();
