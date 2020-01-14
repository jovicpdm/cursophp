<div class="titulo">PDO: Excluir</div>

<?php
require_once "conexao_pdo.php";
$sql = "delete from cadastro where id < ?";

$conexão = novaConexao();
$stmt = $conexão->prepare($sql);

if($stmt->execute([5])){
    echo "Sucesso :)";
} else {
    echo "Erro :(";
    print_r($stmt->errorInfo());
}
