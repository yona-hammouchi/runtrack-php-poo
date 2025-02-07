<?php
class Student
{
    private string $nom;
    private string $prenom;
    private int $numEtudiant;
    private int $credits;

    public function __construct(string $nom, string $prenom, int $numEtudiant)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->numEtudiant = $numEtudiant;
        $this->credits = 0; // Initialisation par défaut à 0
    }

    public function add_credits(int $nombre): void
    {
        if ($nombre > 0) {
            $this->credits += $nombre;
        }
    }
}

// Exemple d'utilisation
$livre = new Livre("1984", "George Orwell");
echo $livre->verification() ? "true\n" : "false\n"; // afficher true
$livre->emprunter();
echo $livre->verification() ? "true\n" : "false\n"; //  afficher false
$livre->rendre();
echo $livre->verification() ? "true\n" : "false\n"; // afficher true

$student = new Student("Doe", "John", 12345);
$student->add_credits(10);
