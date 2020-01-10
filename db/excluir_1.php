<div class="titulo">Excluir Registro #01</div>

<?php
require_once "conexao.php";

$sql = "delete from cadastro where nome = 'Fernanda'";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

echo $resultado ? 'Sucesso ;-)' : 'Erro' . $conexao->error;

$conexao->close();
