<?php

class Animali{

    public $specie;
    private $ambiente = 'savana';

    public function movimento(){

        return 'ogni animale si sposta';
    }
}


class Mammiferi extends Animali{

    public $coda;
}


$gatto = new Mammiferi();
$aquila = new Animali();

echo $gatto->specie ='felino';
echo '<br>';
echo $gatto->movimento();
echo '<br>';
echo $gatto->coda = true;
echo '<br>';

//echo 'proprietà privata della superclasse: ' . $gatto->ambiente;

echo '<br>';
//echo 'proprietà privata della superclasse: ' . $aquila->ambiente;
