<div class="titulo">Classe Data</div>

<?php
class Data{
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    function apresentar(){
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$d1 = new Data();
echo $d1->apresentar() . '<br>';

$d2 = new Data();
$d2->dia = 18;
$d2->mes = 7;
$d2->ano = 2000;

echo $d2->apresentar() . '<br>';