<?php

interface Alimentazione{

    public function mangia($cibo);

    public function corre($km);

}


interface Abitudini{

    public function dorme($oreSonno);
}


class Felini implements Alimentazione, Abitudini {

    public $cibo;
    public $km;

    public function mangia($cibo)
    {
        return $this->cibo = $cibo;
    }

    public function corre($km)
    {
        return $this->km = $km;
    }

    public function dorme($oreSonno)
    {
        // TODO: Implement dorme() method.
    }

}


$gatto = new Felini();

echo 'Proprietà interfaccia Alimentazione: ' . $gatto->cibo = 'crocchette';
echo '<br>';
echo 'Metodo interfaccia Alimentazione: ' . $gatto->mangia('topolino');
echo '<br>';
echo 'Proprietà interfaccia Alimentazione: ' . $gatto->km = 2;
echo '<br>';
echo 'Metodo interfaccia Alimentazione: ' . $gatto->corre(5);