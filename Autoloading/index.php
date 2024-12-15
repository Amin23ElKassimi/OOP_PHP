<?php

/*function carica($class){

    $filename = $class . '.php';
    $file = 'classi/' . $filename;

    if(!file_exists($file)){
        return false;
    }
    include $file;
}

spl_autoload_register('carica');*/

include 'loader.php';

$prodotto1 = new Prodotto();
$cliente1 = new Cliente();

echo $prodotto1->messaggio() . '<br>';
echo $cliente1->messaggio();
