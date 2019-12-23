<div class="titulo">Desafio Equação</div>

<?php
$Rnumerador = (1-5)*(2-7);
$Rdemominador = 2;
$Rnormal = $Rnumerador / $Rdemominador;
$Rexpo1 = $Rnormal ** 2;
$Lnumerador = 6 * (3+2);
$Lexpo = $Lnumerador ** 2;
$Ldenominador = 3 * 2;
$Lnormal = $Lexpo / $Ldenominador;
$Ultra = $Lnormal - $Rexpo1;
$ultraExpo = $Ultra ** 3;
$FinalDenominador = 10 ** 3;
$Total = $ultraExpo / $FinalDenominador;

echo $Total;
