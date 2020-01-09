<div class="titulo">Escrever Arquivos</div>

<?php
$arquivo = fopen('teste.txt', 'w');

fwrite($arquivo, "Valor inicial\n");
$str = 'Tá funcionando';
fwrite($arquivo, $str);
fclose($arquivo);

$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Egidio Saiu P*****\n");
fclose($arquivo);

$arquivo = fopen('teste.txt', 'a');
fwrite($arquivo, "Henrique Também \o/\n");
fwrite($arquivo, "Só falta o Thiago Neves \o/ \n");
fclose();

ini_set('display_errors', 1);
$arquivo = fopen('teste.txt', 'x');