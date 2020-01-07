<div class="titulo">Classes</div>

<?php
class Warrior{
    public $nome = '';
    public $idade;
    public $classe = '';

    function exibir(){
        return "Nome: {$this->nome} <br> Idade: {$this->idade} <br> Classe: {$this->classe}";
    }
}

$w1 = new Warrior();
$w1->nome = 'Kazemiro';
$w1->idade = 16;
$w1->classe = 'Paladino';
echo $w1->exibir() . '<br>';

echo '<br>';
$w2 = new Warrior;
$w2->nome = 'Yuri';
$w2->idade = 15;
$w2->classe = 'Bárbaro';
echo $w2->exibir() . '<br>';