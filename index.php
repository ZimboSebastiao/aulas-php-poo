<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 10</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 10</h1>
    <hr>
    <h2>Assuntos abordados:</h2>

    <ul>
        <li>Composer: Gerenciador de dependência PHP</li>
        <li>Configurar o projeto com Composer usando <code>composer.json</code></li>
        
        
    </ul>
    <hr>

<?php 


use Fornecedor\Pagamento;
use Prestador\Pagamento as PrestadorPagamento;
use Zimbo\{MEI, PessoaFisica as PF, PessoaJuridica as PJ};

require_once "src/MEI.php";
require_once "src/PessoaFisica.php";
require_once "src/PessoaJuridica.php";
require_once "src/fornecedores/Pagamento.php";
require_once "src/prestadores/Pagamento.php";



$pagamentoFornecedor = new Pagamento;
$pagamentoPrestadordor = new PrestadorPagamento;





$clientePF = new PF;
$clientePJ = new PJ;
$clienteMei = new MEI;

$clientePF->setNome("Jorge Camargo");
$clientePJ->setEmail("vanessacamargo@gmail.com");
$clienteMei->setAreaDeAtuacao("Analista de Qualidade");



?>
<h2>Cliente</h2>
<h4><?=$clientePF->getNome()?></h4>
<p><?=$clientePJ->getEmail()?></p>
<p><?=$clienteMei->getAreaDeAtuacao()?></p>
<hr>






</body>
</html>