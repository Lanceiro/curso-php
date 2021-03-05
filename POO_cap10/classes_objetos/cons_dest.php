<div class="titulo">Construtor e Destrutor</div>

<?php

class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        echo "Construtor invocado!<br>";
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct() {
        echo "E morreu!<br>";
    }

    public function apresentar() {
        echo "Meu nome é {$this->nome} e tenho {$this->idade} anos<br>";
    }
}

$pessoa = new Pessoa('Guilherme', 20);
$pessoa->apresentar();
unset($pessoa); // $pessoa = null; 

?>