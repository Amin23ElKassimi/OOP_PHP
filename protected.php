<?php

class Animali{

    public $specie;
    private $ambiente = 'savana';

    protected $mantello = 'pelliccia';

    public function movimento(){
        return $this->mantello;

    }
}


class Mammiferi extends Animali{

    public $coda = true;

}

$gatto = new Mammiferi();
$aquila = new Animali();

echo 'gatto: ' .$gatto->movimento();
echo '<br>';
echo 'aquila: ' .$aquila->movimento();

echo $aquila->coda;


