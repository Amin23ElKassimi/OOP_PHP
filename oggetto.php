<?php

class Veicolo{

    public $brand = 'panda';
    public $colore = 'verde';


    public function presentazione(){
        return 'Ciao, io sono la nuova: ' . $this->brand . ' e sono di colore ' . $this->colore;
    }
}

$macchina1 = new Veicolo();

echo $macchina1->colore = 'rosso';
echo '<br>';
echo $macchina1->brand;
echo '<br>';
echo $macchina1->presentazione();


