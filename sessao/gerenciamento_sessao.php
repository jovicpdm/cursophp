<div class="titulo">Gerenciando Sessão</div>

<?php
//session_id('pjpb1v4d81u5d33plb55vq4sjs');
session_start();
//pjpb1v4d81u5d33plb55vq4sjs
echo session_id();

$contador = &$_SESSION['contador'];
$contador = $contador ? $contador +=1 : 1;
echo '<br>' . $_SESSION['contador'];

if($_SESSION['contador'] % 5 === 0){
    session_regenerate_id();
}

if($_SESSION['contador'] >= 15){
    session_destroy();
}