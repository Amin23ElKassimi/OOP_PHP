<?php
// Esempio 1
interface FigureGeometriche{

    public function calcolaMisura();
}

class Cerchio implements FigureGeometriche{
    private $raggio;

    public function __construct($raggio)
    {
        $this->raggio=$raggio;
    }


    public function calcolaMisura()
    {
        return $this->raggio * $this->raggio * pi();
    }
}

$cerchio1 = new Cerchio(3);

echo 'area del cerchio: ' . $cerchio1->calcolaMisura();

echo '<br>------------------<br>';


class Quadrato implements FigureGeometriche{
    private $lato;


    public function __construct($lato)
    {
        $this->lato=$lato;
    }

    public function calcolaMisura()
    {
        return $this->lato * $this->lato;
    }
}

$quadrato1 = new Quadrato(lato: 5);
echo 'area del quadrato: ' . $quadrato1->calcolaMisura();


// Esempio 2
interface Suonabile {
    public function suona();
}

class Chitarra implements Suonabile {
    public function suona() {
        return "Strimpello accordi";
    }
}

class Tamburo implements Suonabile {
    public function suona() {
        return "Bum bum";
    }
}

class Musicista {
    // Polimorfismo di interfaccia
    public function suonaStrumento(Suonabile $strumento) {
        return $strumento->suona();
    }
}

$musicista = new Musicista();
$chitarra = new Chitarra();
$tamburo = new Tamburo();

echo '<br>------------------<br>';

echo $musicista->suonaStrumento($chitarra);  // "Strimpello accordi"
echo '<br>------------------<br>';

echo $musicista->suonaStrumento($tamburo);   // "Bum bum"