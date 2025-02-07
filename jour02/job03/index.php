<?php

class Livre
{
    private string $titre;
    private string $auteur;
    private bool $disponible;

    public function __construct(string $titre, string $auteur)
    {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->disponible = true; // Attribut privé initialisé à true
    }

    public function verification(): bool
    {
        // Vérifie si le livre est disponible
        return $this->disponible;
    }

    public function emprunter(): bool
    {
        // Permet d'emprunter le livre s'il est disponible
        if ($this->verification()) {
            $this->disponible = false;
            return true;
        }
        return false;
    }

    public function rendre(): bool
    {
        // Permet de rendre le livre s'il a été emprunté
        if (!$this->verification()) {
            $this->disponible = true;
            return true;
        }
        return false;
    }
}

// Exemple d'utilisation
$livre = new Livre("1984", "George Orwell");
echo $livre->verification() ? "true\n" : "false\n";
