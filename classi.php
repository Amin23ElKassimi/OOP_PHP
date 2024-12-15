<?php

class Studenti{
    //Proprieta' 
    public $nome;
    public $contatti;

    // Metodi
    function dettagli($nomeStudente,$contattiStudente){

        $this->nome=$nomeStudente;
        $this->contatti=$contattiStudente;
    }
    function mostraDettagli(){
        echo $this->nome . ' ' . $this->contatti;
    }
    function esempio($numero1, $numero2){

        return $numero1 + $numero2;
    }
}

$studente1 = new Studenti();

$studente1->dettagli('Mario','mail@mail.it');
$studente1->mostraDettagli();
echo '<br>';
var_dump($studente1);
echo '<br>';
print_r($studente1);
echo '<br>';
echo $studente1 ->esempio(10, 12);