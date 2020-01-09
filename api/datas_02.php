<div class="titulo"> Datas #02</div>

<?php
$formatoData1 = 'D, d \d\e M \d\e Y';
$formatoData2 = '%A, %d de %B de %Y';
$formatoDataHora = '%A, %d de %B de %Y - %H:%M:%S';

$agora = new DateTime();

//print_r($agora);
//echo '<br>';

echo $agora->format($formatoData1) . '<br>';

setlocale(LC_TIME, 'pt_BR');
echo strftime($formatoData2, $agora->getTimestamp())  . '<br>' ;

$dataFixa = new DateTime('2000-07-18 16:01:43');
echo strftime($formatoDataHora, $dataFixa->getTimestamp()) . '<br>';

$amanha = new DateTime('-2 days');
echo strftime($formatoData2, $amanha->getTimestamp()) . '<br>';

$amanha->modify('+1 day');
echo strftime($formatoDataHora,$amanha->getTimestamp()) . '<br>';

$amanha->setDate(2001, 19, 8);
echo strftime($formatoDataHora, $amanha->getTimestamp()) . '<br>';

$dataPassado = new DateTime('2000-07-18');
$dataFuturo = new DateTIme('2020-12-31');
$outraData = new DateTime('2020-12-31');
echo ($amanha > $dataPassado ? 'Maior' : 'Menor') . '<br>';
echo ($amanha > $dataFuturo ? 'Maior' : 'Menor') . '<br>';
echo ($outraData == $dataFuturo ? 'Igual' : 'Diferente') . '<br>';

echo '<br>';
$tz = new DateTimeZone('America/Sao_Paulo');
$agora = new DateTime(null, $tz);
echo $agora->format('d,M,Y H:i:s');