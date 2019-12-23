<div class="titulo">Desafio PI</div>

<?php
echo pi();
$pi = 3.14;

if($pi === pi()){
    echo "<br> Iguais";
} else {
    echo "<br>DIferentes";
}

//Operador Relacional
$piErrado = 2.8;

//Resposta
echo '<br>' . ($pi - pi());
echo '<br>' . ($pi- pi());

if($pi - pi() <= 0.01){
    echo '<br> Praticamente Iguais';
} else{
    echo '<br> Valor Errado';
}
