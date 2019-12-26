<div class="titulo">Desafio Operadores Lógicos</div>

<!--
    Doios Trabalhos -> terça e quinta!
    - Se os dois forem executados -> TV 50' e Sorvete
    - Se apenas um for executado -> TV 32' e Sorvete
    - Se nenhum for executado -> fica em casa mais saudável!
-->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça)</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta)</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button,
    select {
        font-size: 1.8rem;
    }
</style>

<?php

$t1;
$t2;

if ($_POST['t1'] === '0') {
    $t1 = false;
} else $t1 = true;

if ($_POST['t2'] === '0') {
    $t2 = false;
} else $t2 = true;

if ($t1 == true && $t2 == true) {
    echo "Vamos comprar a televisão de 50' e tomar sorvete!!!";
} else if (
    ($t1 == true && $t2 == false) || ($t1 == false && $t2 == true)
) {
    echo "Vamos comprar a televisão de 32' e tomar sorvete";
} else {
    echo "Não vamos comprar sorvete, mas vamos ficar saudáveis";
}
