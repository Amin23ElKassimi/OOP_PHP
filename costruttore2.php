<?php

class Utente
{

    private $nome = '';
    private $cognome = '';
    private $anni = '';

    public function __construct($nome = NULL, $cognome = NULL, $anni = NULL)
    {
        //echo 'costruttore inizializzato';
        if($nome && $cognome && $anni){
            $this->nome = $nome;
            $this->cognome = $cognome;
            $this->anni = $anni;
        }
    }


    //metodo magico __set
    public function __set($proprieta, $valore){
        if(property_exists($this, $proprieta)){
            $this->$proprieta = $valore;
        }
}
     // metodo magico __get
    public function __get($proprieta){
        if(property_exists($this, $proprieta)){
           return $this->$proprieta;
        }

        }


    /*public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }*/
}

$utente1 = new Utente('Mario','Rossi',30);
//$utente1 = new Utente();
//echo $utente1->nome;

//$utente1->setNome('Marco');
//echo $utente1->getNome();
echo '<br>';
$utente1->__set('cognome','Bruni');
echo $utente1->__get('cognome');


echo '<br>';
$utente1->__set('anni',21);
echo $utente1->__get('anni');


$utente2 = new Utente('Carla' , 'Verdi', 25);
//echo $utente2->cognome;
//$utente2->setNome('Antonio');
//echo $utente2->getNome();

