<div class="titulo">Desafio Sorteio</div>

<?php
$nomes = ["Elza", "Rapunzel", "Branca de Neve", "Cinderela"];

$sorteio = array_rand($nomes);
echo "$sorteio = $nomes[$sorteio]";
