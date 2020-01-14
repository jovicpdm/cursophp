<div class="titulo">PDO: Inserir</div>

<?php
require_once "conexao_pdo.php";

$sql = "insert into cadastro
(nome, email, nascimento, site, filhos, salario)
values (
    'Guilherme Filho',
    'guidagalera@gmail.com',
    '1998-7-21',
    'http://guidagalera.com.br',
    0,
    3000
)";

$conexao = novaConexao();

if($conexao->exec($sql)){
    $id = $conexao->lastInsertId();
    echo "Novo cadastro com id $id.";
} else {
    echo $conexao->errorCode() . "<br>";
    print_r($conexao->errorInfo());
}

$conexao->close();