<div class="titulo">Include Função</div>

<?php
echo 'Carregando: include_funcao.php <br>';

function carregarArquivo() {
    include('include_arquivo.php');

    echo $variavel, '<br>';
    echo soma(2,5), '<br>';

}

echo 'Novamente no arquivo include_funcao.php<br>';
// echo soma(1,8) . '!<br>';
carregarArquivo();

echo soma(3, 8);
echo $variavel;