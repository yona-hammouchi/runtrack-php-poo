<?php

class Voiture
{
    private string $privés;
    private string $marque;
    private string $modèle;
    private int $année;
    private int $km;
    private bool $en_marche;
    private int $reservoir;

    public function __construct(string $privés, string $marque, string $modèle, int $année, int $km, bool $en_marche = false, int $reservoir = 50)
    {
        $this->privés = $privés;
        $this->marque = $marque;
        $this->modèle = $modèle;
        $this->année = $année;
        $this->km = $km;
        $this->en_marche = $en_marche;
        $this->reservoir = $reservoir;
    }

    public function setPrives(string $privés): void
    {
        $this->privés = $privés;
    }

    public function setMarque(string $marque): void
    {
        $this->marque = $marque;
    }

    public function setModèle(string $modèle): void
    {
        $this->modèle = $modèle;
    }

    public function setAnnée(int $année): void
    {
        $this->année = $année;
    }

    public function setKm(int $km): void
    {
        $this->km = $km;
    }

    public function setEnMarche(bool $en_marche): void
    {
        $this->en_marche = $en_marche;
    }

    public function setReservoir(int $reservoir): void
    {
        $this->reservoir = $reservoir;
    }

    public function getPrives(): string
    {
        return $this->privés;
    }

    public function getMarque(): string
    {
        return $this->marque;
    }

    public function getModèle(): string
    {
        return $this->modèle;
    }

    public function getAnnée(): int
    {
        return $this->année;
    }

    public function getKm(): int
    {
        return $this->km;
    }

    public function getEnMarche(): bool
    {
        return $this->en_marche;
    }

    public function getReservoir(): int
    {
        return $this->reservoir;
    }

    public function demarrer(): string
    {
        $litres = $this->verifier_plein();
        if ($litres < 5) {
            return "Il n'y a pas assez d'essence";
        }
        return $this->en_marche = true;
    }

    public function arreter(): string
    {
        return $this->en_marche = false;
    }

    private function verifier_plein()
    {
        return $this->reservoir;
    }
}

$voiture1 = new Voiture("voit priv 1", "Peugeot", "208", 2019, 10000, true, 50);
echo $voiture1->demarrer();
