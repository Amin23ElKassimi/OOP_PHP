<?php

class person{
    public $nome;
    public $eta;

    public function __construct($nome, $eta) {
        $this->nome = $nome;
        $this->eta = $eta;
    }
    
    public function descrivi() {
        return "Mi chiamo {$this->nome} e ho {$this->eta} anni.";
    }

    public function aggiornaNome($nuovoNome) {
        $this->nome = $nuovoNome;
    }


}

$persona1 = new person("Marco", 25);
$persona2 = new person("Anna", 30);

echo $persona1->descrivi(); // "Mi chiamo Marco e ho 25 anni."
echo $persona2->descrivi(); // "Mi chiamo Anna e ho 30 anni."