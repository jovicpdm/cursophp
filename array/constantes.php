<div class="titulo">Arrays Constantes</div>

<?php
const FRUTAS = array('laranja','abacaxi');
echo FRUTAS[0];

const CARROS = ["Fiat" => "Uno", "Ford" => "Fiesta"];
echo '<br>' . CARROS["Fiat"];

define('CIDADES', array('Belo Horizonte','Recife'));
echo '<br>' . CIDADES[0];