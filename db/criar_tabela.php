<div class="titulo">Criar Tabela</div>

<?php

require_once "conexao.php";

// DDL - Data Definition Language
$sql = "create table if not exists cadastro(
    id int(6) unsigned auto_increment primary key,
    nome varchar(100) not null,
    nascimento date,
    email varchar(100) not null,
    site varchar(100),
    filhos int,
    salario float
)";

$conexao = novaConexao();

$resultado = $conexao->query($sql);

echo $resultado ? 'Sucesso : )' : 'Erro' . $conexao->error;

$conexao->close();