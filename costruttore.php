<?php

class Utente
{

    public $nome;
    public $cognome;

    public function __construct($nome, $cognome)
    {
        //echo 'costruttore inizializzato';
    $this ->nome = $nome;
    $this->cognome = $cognome;

    }
}

$utente1 = new Utente('Mario' , 'Rossi');
echo $utente1->nome;
echo '<br>';
$utente2 = new Utente('Carla' , 'Verdi');
echo $utente2->cognome;

