<?php

class Animali{

    public $specie;
    private $ambiente = 'savana';

    protected $mantello = 'pelliccia';

    public function movimento(){
        return $this->mantello;
    }

    final public function sayHello(){
        return 'io sono un gatto';
    }
}


class Mammiferi extends Animali{

    public $coda = true;

    public function movimento(){

        return 'i mammiferi corrono';
    }

}

$gatto = new Mammiferi();
$aquila = new Animali();

echo 'gatto: ' .$gatto->movimento();
echo '<br>';
echo 'aquila: ' .$aquila->movimento();
echo '<br>';
echo 'gatto: ' .$gatto->sayHello();


