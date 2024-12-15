<?php

class Accesso{

    public $pubblica = 'proprietà pubblica';

    private $privata = 'proprietà privata';

    public function messaggio(){

        echo $this->pubblica;
        echo $this->privata;
    }

}

$accesso1 = new Accesso();

//echo $accesso1->pubblica;

//echo $accesso1->privata;

echo $accesso1->messaggio();