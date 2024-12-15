<?php


abstract class Forme{

    protected $base;
    protected $altezza;

    abstract public function calcolaArea($base,$altezza);

}

class Quadrato extends Forme{

    public function calcolaArea($base,$altezza)
    {
        $area = $base * $altezza;

        return $area;
    }
}

$quadrato1 = new Quadrato();

echo $quadrato1->calcolaArea(3,3);


class Rettangolo extends Forme{

    public function calcolaArea($base, $altezza)
    {
        $perimetro = ($base * 2) + ($altezza * 2);
        return $perimetro;
    }
}


$rettangolo1 = new Rettangolo();
echo $rettangolo1->calcolaArea(4,5);