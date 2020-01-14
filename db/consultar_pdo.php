<div class="titulo">PDO: Consultar</div>

<?php
require_once "conexao_pdo.php";

$conexao = novaConexao();
$sql = "select * from cadastro";
//PDO::FETCH_NUM
//PDO::FETCH_ASSOC
//PDO::FETCH_CLASS
//PDO::FETCH_BOTH
$resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);
print_r($resultado);

echo "<hr>";

$sql = "select * from cadastro limit :qtde offset :inicio";

$stmt = $conexao->prepare($sql);
$stmt->bindValue(':qtde', 2, PDO::PARAM_INT);
$stmt->bindValue(':inicio', 3, PDO::PARAM_INT);

//print_r(get_class_methods($stmt));

if($stmt->execute()) {
    $resultado = $stmt->fetchAll();
    print_r($resultado);
} else {
    echo "Código: " . $stmt->errorCode() . '<br>';
    print_r($stmt->errorInfo());
}

echo "<hr>";

$sql = "select * from cadastro where id = :id";
$stmt = $conexao->prepare($sql);
//$stmt->bindValue('id', 24);
//if ($stmt->execute([1])) {
//if ($stmt->execute()) {
if ($stmt->execute([':id' => 4])) {
    $resultado = $stmt->fetch();
    print_r($resultado);
} else {
    echo "Código: " . $stmt->errorCode() . '<br>';
    print_r($stmt->errorInfo());
}


$conexao->close();