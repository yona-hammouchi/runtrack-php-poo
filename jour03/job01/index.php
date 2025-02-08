<?php
// Classe Personne
class Personne
{
    private int $age = 14;

    public function __construct(int $age = 14)
    {
        $this->age = $age;
    }

    public function bonjour(): void
    {
        echo "Hello\n";
    }

    public function afficherAge(): void
    {
        echo "J'ai " . $this->age . " ans\n";
    }

    public function modifierAge(int $nouvelAge): void
    {
        if ($nouvelAge < 0) {
            echo "Erreur : L'âge ne peut pas être négatif.\n";
        } else {
            $this->age = $nouvelAge;
        }
    }

    // Getter pour l'âge
    public function getAge(): int
    {
        return $this->age;
    }
}

// Classe Eleve qui hérite de Personne
class Eleve extends Personne
{
    public function allerEnCours(): void
    {
        echo "Je vais en cours\n";
    }

    // Redéfinir la méthode afficherAge pour l'élève
    public function afficherAge(): void
    {
        echo "J'ai " . $this->getAge() . " ans (élève)\n";
    }
}

// Création d'un élève
$eleve = new Eleve(16);

// Vérification des méthodes
$eleve->bonjour();         // Doit afficher "Hello"
$eleve->afficherAge();     // Doit afficher "J'ai 16 ans (élève)"
$eleve->allerEnCours();    // Doit afficher "Je vais en cours"
