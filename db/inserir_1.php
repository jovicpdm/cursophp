<div class="titulo">Inserir Registro #01</div>

<?php

require_once "conexao.php";

$sql = "insert into cadastro (nome, nascimento, email, site, filhos, salario)
values (
    'Fernanda',
    '2005-02-21',
    'fernanda@gmail.com',
    'https://www.frnd.com.br',
    0,
    1400
)
";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

echo $resultado ? 'Sucesso : )' : 'Erro' . $conexao->error;

$conexao->close();