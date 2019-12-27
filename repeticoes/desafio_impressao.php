<div class="titulo">Desafio Impressão</div>

<!-- 
    Enunciado: 
    - Imprima apenas os valores do array que contém índice par
    - Resolver com for e foreach
    - Valores esperados: AAA, CCC, EEE
-->

<?php
$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];

foreach($array as $indice => $valor){
    if($indice === 6) break;
    if($indice %2 === 1) continue;
    echo "<br> $valor";
}