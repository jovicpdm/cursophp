<div class="titulo">Operador Ternário</div>

<?php
$idade = 70;
$status;

if($idade >= 18) {
    $status = "Maior de Idade";
} else {
    $status = "Menor de Idade";
}

echo "$status<br>";

$status = $idade >=18 ? 'Maior de Idade' : 'Menor de idade';

echo "$status<br>";

$tipoMaiorIdade = $idade >= 65 ? 'Aposentado' : 'Maior de Idade';
$status = $idade >= 18 ? $tipoMaiorIdade : 'Menor de Idade';