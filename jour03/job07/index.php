<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Étape 1 : Création de la classe Carte
class Carte
{
    public string $valeur;
    public string $couleur;

    public function __construct(string $valeur, string $couleur)
    {
        $this->valeur = $valeur;
        $this->couleur = $couleur;
    }

    public function afficherCarte(): string
    {
        return "{$this->valeur} de {$this->couleur}";
    }
}

// Étape 2 : Création de la classe Jeu pour gérer le paquet de cartes
class Jeu
{
    private array $paquet = [];
    private array $valeurs = ["2", "3", "4", "5", "6", "7", "8", "9", "10", "Valet", "Dame", "Roi", "As"];
    private array $couleurs = ["Cœur", "Carreau", "Trèfle", "Pique"];

    public function __construct()
    {
        foreach ($this->couleurs as $couleur) {
            foreach ($this->valeurs as $valeur) {
                $this->paquet[] = new Carte($valeur, $couleur);
            }
        }
        shuffle($this->paquet);
    }

    public function tirerCarte(): Carte
    {
        return array_pop($this->paquet);
    }
}

// Étape 3 : Gestion des mains des joueurs
class Main
{
    private array $cartes = [];

    public function ajouterCarte(Carte $carte)
    {
        $this->cartes[] = $carte;
    }

    public function calculerValeur(): int
    {
        $valeurTotale = 0;
        $nombreAs = 0;

        foreach ($this->cartes as $carte) {
            if (is_numeric($carte->valeur)) {
                $valeurTotale += (int)$carte->valeur;
            } elseif ($carte->valeur == "As") {
                $nombreAs++;
                $valeurTotale += 11;
            } else {
                $valeurTotale += 10;
            }
        }

        while ($valeurTotale > 21 && $nombreAs > 0) {
            $valeurTotale -= 10;
            $nombreAs--;
        }

        return $valeurTotale;
    }

    public function afficherMain(): string
    {
        return implode(", ", array_map(fn($carte) => $carte->afficherCarte(), $this->cartes));
    }
}

// Étape 4 : Gestion du joueur et du croupier
class Joueur
{
    public Main $main;

    public function __construct()
    {
        $this->main = new Main();
    }
}

class Croupier extends Joueur
{
    public function doitTirer(): bool
    {
        return $this->main->calculerValeur() < 17;
    }
}

// Étape 5 : Déroulement d’une partie
class Blackjack
{
    private Jeu $jeu;
    private Joueur $joueur;
    private Croupier $croupier;

    public function __construct()
    {
        $this->jeu = new Jeu();
        $this->joueur = new Joueur();
        $this->croupier = new Croupier();

        // Distribuer 2 cartes au joueur et au croupier
        $this->joueur->main->ajouterCarte($this->jeu->tirerCarte());
        $this->joueur->main->ajouterCarte($this->jeu->tirerCarte());
        $this->croupier->main->ajouterCarte($this->jeu->tirerCarte());
        $this->croupier->main->ajouterCarte($this->jeu->tirerCarte());
    }

    public function jouer()
    {
        echo "<pre>";
        echo "Votre main : " . $this->joueur->main->afficherMain() . " (" . $this->joueur->main->calculerValeur() . " points)\n";
        echo "Main du croupier : " . $this->croupier->main->afficherMain() . " (" . $this->croupier->main->calculerValeur() . " points)\n";

        while ($this->joueur->main->calculerValeur() < 21) {
            $this->joueur->main->ajouterCarte($this->jeu->tirerCarte());
            echo "Votre main : " . $this->joueur->main->afficherMain() . " (" . $this->joueur->main->calculerValeur() . " points)\n";
            if ($this->joueur->main->calculerValeur() > 21) {
                echo "Vous avez dépassé 21 ! Vous avez perdu.\n";
                return;
            }
        }

        while ($this->croupier->doitTirer()) {
            $this->croupier->main->ajouterCarte($this->jeu->tirerCarte());
            echo "Le croupier tire : " . $this->croupier->main->afficherMain() . "\n";
        }

        echo "Main du croupier finale : " . $this->croupier->main->afficherMain() . " (" . $this->croupier->main->calculerValeur() . " points)\n";

        $valeurJoueur = $this->joueur->main->calculerValeur();
        $valeurCroupier = $this->croupier->main->calculerValeur();

        if ($valeurCroupier > 21 || $valeurJoueur > $valeurCroupier) {
            echo "Félicitations ! Vous avez gagné !\n";
        } elseif ($valeurJoueur < $valeurCroupier) {
            echo "Le croupier a gagné.\n";
        } else {
            echo "Match nul !\n";
        }
        echo "</pre>";
    }
}

// Lancer une partie
$blackjack = new Blackjack();
$blackjack->jouer();
