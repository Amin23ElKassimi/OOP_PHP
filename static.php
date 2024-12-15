<?php

class Corsi{

    static public $sessioniEsami = 0;
    public $esami;

    static public function sessioni(){

        self::$sessioniEsami;
        return 'sono iniziate le sessioni di esame';
    }
}

echo Corsi::$sessioniEsami = 5;
echo Corsi::sessioni();