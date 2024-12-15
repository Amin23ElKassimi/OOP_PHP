<?php

class FormeGeometriche{
    public function __construct()
    {
        echo 'Abbiamo creato una forma<br>';

    }

}

class Rettangolo extends FormeGeometriche{

    public $larghezza;
    public $altezza;

    public function __construct($larghezza,$altezza)
    {
        parent::__construct();

        $this->larghezza=$larghezza;
        $this->altezza=$altezza;
        echo 'Abbiamo creato un rettangolo di: ' . $this->larghezza . 'x' . $this->altezza . '<br>';
    }

    public function __destruct(){

        echo 'Abbiamo distrutto  un rettangolo di: ' . $this->larghezza . 'x' . $this->altezza;
    }
}

function creaForma(){

    $rettangolo1 = new Rettangolo(20,30);

    echo 'sono una funzione';
}

creaForma();