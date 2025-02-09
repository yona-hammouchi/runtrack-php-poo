<?php
class Personne
{
    protected int $age = 14; // Attribut age initialisé à 14

    public function afficherAge(): void
    {
        echo "J'ai " . $this->age . " ans\n";
    }

    public function bonjour(): void
    {
        echo "Hello\n";
    }

    public function modifierAge(int $ParamNouvelAge): void
    {
        $this->age = $ParamNouvelAge;
    }
}

class Eleve extends Personne
{
    public function allerEnCours(): void
    {
        echo "Je vais en cours\n";
    }

    public function afficherAge(): void
    {
        echo "J'ai " . $this->age . " ans\n";
    }
}

class Professeur extends Personne
{
    protected string $matiereEnseignee;

    public function __construct(string $matiere)
    {
        $this->matiereEnseignee = $matiere;
    }

    public function enseigner(): void
    {
        echo "Le cours va commencer\n";
    }
}

// Création d'une Personne
$personne = new Personne("john", "doe");
$personne->afficherAge();

// Création d'un Eleve
$eleve = new Eleve("joe", "dupont");
$eleve->afficherAge();
