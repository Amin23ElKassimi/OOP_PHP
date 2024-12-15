<?php

require 'src/moto/honda.php';
require 'src/moto/kawasaki.php';
require 'src/clienti/utente.php';



/*use weblab\moto\honda;
use weblab\moto\kawasaki;
use weblab\clienti\utente;*/


use weblab\{
    moto\honda,
    moto\kawasaki,
    clienti\utente

};


$moto1 = new Honda();
var_dump($moto1);
$moto2 = new Kawasaki();
echo $moto2->messaggio();
echo $moto1->messaggio();
echo '<br>';
$cliente1 = new Utente();
var_dump($cliente1);
echo $cliente1->messaggio();
