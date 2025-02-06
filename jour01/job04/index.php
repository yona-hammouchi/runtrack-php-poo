<?php
class Point
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function afficherLesPoints()
    {
        return "les coordonnées sont:(" . $this->x . "," . $this->y . ")";
    }

    public function afficherX()
    {
        return "La coordonnée x est: " . $this->x;
    }

    public function afficherY()
    {
        return "La coordonnée y est: " . $this->y;
    }

    public function changerX($nouvelleValeurX)
    {
        $this->x = $nouvelleValeurX;
    }

    public function changery($nouvelleValeurY)
    {
        $this->y = $nouvelleValeurY;
    }
}

$point = new Point(5, 8);
echo $point->afficherLesPoints() . "\n";
echo $point->afficherX() . "\n";
echo $point->afficherY() . "\n";
echo $point->afficherLesPoints();
