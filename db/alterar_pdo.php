<div class="titulo">PDO Alterar</div>

<?php
require_once "conexao_pdo.php";

$sql = "update cadastro 
set nome = ?, nascimento = ?, email = ?,
 site = ?, filhos = ?, salario = ? 
 where id = ?";

$conexao = novaConexao();
$stmt = $conexao->prepare($sql);

$resultado = $stmt->execute([
    'Joana',
    '1999-12-14',
    'gui@gui.com.br',
    'http:gui.co',
    1,
    12000,
    8
]);

if($resultado){
    echo "Sucesso :)";
}else{
    print_r($stmt->errorInfo());
}