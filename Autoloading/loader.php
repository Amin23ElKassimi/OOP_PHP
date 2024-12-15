<?php
function carica($class){

    $filename = $class . '.php';
    $file = 'classi/' . $filename;

    if(!file_exists($file)){
        return false;
    }
    include $file;
}

spl_autoload_register('carica');