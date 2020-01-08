<?php
echo 'Carregando: include_once_arquivo<br>';

$variavel = 'Estou Definida';

if(!function_exists('soma')){
    function soma($a, $b){
        return $a + $b;
    }
}