<?php

interface Alimentazione{

    public function mangia($cibo);

    public function corre($km);
}

interface Abitudini{

    public function dorme($oreSonno);
}


class Felini implements Alimentazione {

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

}

class Gatto extends Felini implements Abitudini {

    public function dorme($oreSonno)
    {
        $this->oreSonno = $oreSonno;
       return 'Un gatto dorme ' . $oreSonno . ' ore al giorno';
    }

    public function mangia($cibo){

        return 'il gatto mangia il topo';
    }
}

$gatto = new Felini();

$persiano = new Gatto();
echo $persiano->mangia('mousse');
echo $persiano->dorme(22);