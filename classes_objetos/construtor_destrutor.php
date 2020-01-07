<div class="titulo">Construtor e Destrutor</div>

<?php
class Robo {
    public $nome;
    public $modelo;

    function __construct($novoNome, $modelo = 18) {
        echo 'Criando Android...! <br>';
        $this->nome = $novoNome;
        $this->modelo = $modelo;
    }

    function __destruct() {
        echo 'Android Destruído com sucesso!<br>';
    }

    public function apresentar() {
        echo "Android {$this->nome}{$this->modelo} criado com sucesso!!!!<br>";
    }
}

// $Robo = new Robo(); // Problema

$RoboA = new Robo('TE', 40);

$RoboA->apresentar();
unset($RoboA);

$RoboB = new Robo('JVn');
$RoboB->apresentar();
$RoboB = null;