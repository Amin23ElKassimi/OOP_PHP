<?php

trait Prezzo{

    public function cambiaPrezzo($prezzoOriginale, $prezzoNuovo){
        return $prezzoOriginale + $prezzoNuovo;

    }
}

trait cambioTariffa{

    function tariffaNuova($cambio){
        return $this->prezzo += $cambio;
    }
}



class Biciclette{

    use Prezzo;
}

$bici1 = new Biciclette();
echo $bici1->cambiaPrezzo(340,50);

class Moto{

    use cambioTariffa;
    private $prezzo;

    public function __construct($prezzo)
    {
        $this->prezzo=$prezzo;
    }

    function mostraPrezzo(){
        return $this->prezzo;
    }
}

$vespa = new Moto(2300);
$vespa->tariffaNuova(-300);
echo $vespa->mostraPrezzo();