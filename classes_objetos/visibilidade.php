<div class="titulo">Visibilidade</div>

<?php
class A{
    public $publico = 'Publico';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA(){
        $this->naoMostrar();
        echo "a) Publico = {$this->publico}<br>";
        echo "b) Protegido = {$this->protegido}<br>";
        echo "c) Privado = {$this->privado}";
    }

    protected function vaiPorHEranca(){
        echo "Serei transmitida por herança!<br>";
    }

    private function naoMostrar(){
        echo "Não vou imprimir <br>";
    }
}

$a = new A();
$a->mostrarA();
// $a->naoMostrar();

class B extends A {
    public function mostrarB(){
        echo "Class B) Publico = {$this->publico}<br>";
        echo "Class B) Protegido = {$this->protegido}<br>";
        echo "Class B) Privado = {$this->privado}<br>";

        parent::vaiPorHEranca();
    }
}

echo '<br>';
echo '<br>';
$b = new B();
$b->mostrarB();
$b->mostrarA();