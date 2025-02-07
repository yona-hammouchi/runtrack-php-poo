<?php
class Livre
{
    private $titre;
    private $auteur;
    private $pages;

    public function __construct($titre, $auteur, $pages)
    {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->pages = $pages;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function getAuteur()
    {
        return $this->auteur;
    }

    public function getPages()
    {
        return $this->pages;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    }

    public function setPages($pages)
    {
        if (is_int($pages) && $pages > 0) {
            $this->pages = $pages;
        } else {
            echo "Erreur : Le nombre de pages doit être un entier positif.\n";
        }
    }
}

// Création d'un livre
$livre = new Livre("Le Petit Prince", "Antoine de Saint-Exupéry", 93);

// Affichage des informations initiales
echo "Informations initiales :\n";
echo "Titre : " . $livre->getTitre() . "\n";
echo "Auteur : " . $livre->getAuteur() . "\n";
echo "Pages : " . $livre->getPages() . "\n";

// Tentative de modification avec une valeur invalide
$livre->setPages(-5);

// Modification avec une valeur valide
$livre->setPages(100);

// Affichage des nouvelles informations
echo "\nNouvelles informations :\n";
echo "Titre : " . $livre->getTitre() . "\n";
echo "Auteur : " . $livre->getAuteur() . "\n";
echo "Pages : " . $livre->getPages();
