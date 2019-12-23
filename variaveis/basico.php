<div class="titulo">Variáveis</div>

<?php

$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$somaDosNumeros = $a + $b;
echo $somaDosNumeros;

echo '<br>';
echo isset($somaDosNumeros);

unset($somaDosNumeros);
echo '<br>';
var_dump($somaDosNumeros);

$variavel = 10;
echo '<br>' . $variavel;

$variavel = 'Agora sou uma string';
echo '<br>' . $variavel;

// Nomes de variável

$var = 'válida';
$var2 = 'válida';
$VAR3 = 'válida';
$_var_4 = 'válida';
$vâr5 = 'válida'; //evitar
// $6var = 'inválida';
// $%var7 = 'inválida';
// $vâr8% = 'inválida';


echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);
