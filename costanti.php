<?php

class Utente{

    const CODICE_FISCALE = 'SMNTSS67R78H453G';

    public function mostraCostante(){

        echo self::CODICE_FISCALE;
    }
}

echo Utente::CODICE_FISCALE;
echo '<br>';
$nomeClasse = 'Utente';

echo $nomeClasse::CODICE_FISCALE;
echo '<br>';
$utente1 = new Utente();

echo $utente1->mostraCostante();
echo '<br>';
echo $utente1::CODICE_FISCALE;
echo '<br>';
echo '-----------------------';
echo '<br>';

class Magliette{

    public $misura;

    const SMALL = 'small';
    const MEDIUM = 'medium';
    const LARGE = 'large';

}

$polo = new Magliette();
echo $polo->misura = Magliette::MEDIUM;